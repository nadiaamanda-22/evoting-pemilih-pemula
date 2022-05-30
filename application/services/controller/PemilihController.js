const router = require('express').Router();
const response = require('../helpers/response-parser');
const pagination = require('../helpers/pagination-parser');
const datetime = require('../helpers/datetime-helper');
const Sequelize = require('sequelize');
const PemilihModel = require('../models/PemilihModel');
const md5 = require('md5');
const fs = require('fs');
const {where} =require('sequelize');


router.get('/',(req,res) => {
    let size = parseInt(req.query.limit);
    let page = parseInt(req.query.page);
    let orderField = req.query.orderField;
    let orderValue = req.query.orderValue;
    let filterField = req.query.filterField;
    let search = req.query.search != null ? req.query.search : '' ;

    let modelAttr = PemilihModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({[val.field]:{[Sequelize.Op.like]:'%' + search + '%'}});
    });

    let wheresF = [];
    if(filterField != null && filterValue!=null){
        for(let i = 0; i< filterField.length; i++){
            wheresF.push({[filterField[i]]: {[Sequelize.Op.eq]: filterValue[i]}});
        }
    }
    if(req.query.limit != null){
        const resPage = pagination.getPagination(size, page);
        PemilihModel.findAndCountAll({
            limit: resPage.limit,
            offset: resPage.offset,
            order: [[orderField != null ? orderField : 'id_pemilih', orderValue != null ? orderValue:'asc']],
            where: Sequelize.and(Sequelize.literal('tb_pemilih.delete_at is null'),{
                [Sequelize.Op.and]:(wheresF),  
                [Sequelize.Op.or]:(wheres),  
            })
        })
        .then(result => {
            const resPageData = pagination.getPagingData(result['count'], resPage.limit);
            const totalItems = resPageData.totalItems;
            const totalPages = resPageData.totalPages;
            const data = result['rows'];

            const dummy = {};
            dummy['page'] = page;
            dummy['limit'] = resPage.limit;
            dummy['totalItems'] = totalItems;
            dummy['totalPages'] = totalPages;
            dummy['data'] = data;
            response.success(res,{data:dummy});
        })
        .catch(err => {
            response.error(res,{error:'Please cek your signal!'});
        });
    }else{
        PemilihModel.findAll({
            order: [[orderField != null ? orderField : 'id_pemilih', orderValue != null ? orderValue : 'asc']],
            where: Sequelize.and(Sequelize.literal('tb_pemilih.delete_at is null'),{
                [Sequelize.Op.and]: (wheresF),
                [Sequelize.Op.or]: (wheres)
            })
        }).then(data => {
            response.success(res,{data:data});
        });
    }   
});

router.get('/find', (req, res) => {
    let modelAttr = PemilihModel.rawAttributes;
    let wheres = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.query[val.field] != null) {
            wheres[val.field] = req.query[val.field];
        }
    });

    PemilihModel.findAll({
        where: Sequelize.and(Sequelize.literal('delete_at is null'), wheres),  
        }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/search/:term', (req, res) => {
    let modelAttr = PemilihModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + req.params.term + '%' } });
    });

    PemilihModel.findAll({
        where: Sequelize.and(Sequelize.literal('tb_pemilih.delete_at is null'), { [Sequelize.Op.or]: (wheres) }), 
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/:id', (req, res) => {
    PemilihModel.findOne({
        where: Sequelize.and({ [PemilihModel.primaryKeyAttribute]: req.params.id },
        Sequelize.literal('tb_pemilih.delete_at is null')),
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.post('/insert', (req, res) => {
    let modelAttr = PemilihModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }  
        inputs['password'] = md5(req.body.password)
        inputs['status_pemilihan'] = '0';
    });

    PemilihModel.findOne({
        where: Sequelize.and(Sequelize.or({ email: req.body.email}, { nomor_induk_kependudukan: req.body.nomor_induk_kependudukan}),Sequelize.literal('tb_pemilih.delete_at is null'))
        }).then(data => {
            if (data) {
                if (data.email == req.body.email) {
                    response.error(res, { error:  'Email Sudah Digunakan'}); 
                }else if(data.nomor_induk_kependudukan == req.body.nomor_induk_kependudukan){
                    response.error(res, { error:  'Nomor Induk Kependudukan Sudah Digunakan'}); 
                }else{
                    response.success(res, { message: 'Data Bisa Digunakan' }); 
                }
            }else{
                if ((req.body.jk_pemilih != 'Laki-laki') && (req.body.jk_pemilih != 'Perempuan')) {
                    response.error(res, { error:  'Jenis Kelamin Laki-laki / Perempuan'}); 
                }else{
                    PemilihModel.create(inputs).then(data => {
                        response.success(res, { message: 'Tambah Data Pemilih Berhasil!', data: data }); 
                    }).catch((err) => {
                        response.error(res, { error: 'Tambah Data Pemilih Gagal' }); 
                    });
                }
            }
        }).catch((err) => {
            response.error(res, { error: 'Tambah Data Pemilih Gagal' }); 
        });
});

router.put('/update/:id', (req, res) => {
    let modelAttr = PemilihModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }
    });

    PemilihModel.update(inputs, {
        where: {
            [PemilihModel.primaryKeyAttribute]: req.params.id
        }
    }).then(data => {
        response.success(res, { message: 'Ubah Data Pemilih Berhasil!', data: inputs }); 
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/delete/:id', (req, res) => {
    PemilihModel.update({ delete_at: datetime.getCurrentDateTime() }, {
        where: {
            [PemilihModel.primaryKeyAttribute]: req.params.id_role
        }
    }).then(() => {
        response.success(res, { message: 'Hapus Data Pemilih Berhasil!' });

    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/hard_delete/:id', (req, res) => {
    if(req.params.id == null){
        response.error(res, { error: 'Parameter Tidak Boleh Kosong' });
    }
    PemilihModel.destroy({ where: { [PemilihModel.primaryKeyAttribute]: req.params.id } }).then(() => {
        response.success(res, { message: 'Hapus Permanen Data Pemilih Berhasil!!' });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

module.exports = router;
