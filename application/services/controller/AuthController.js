const router = require('express').Router();
const response = require('../helpers/response-parser');
const pagination = require('../helpers/pagination-parser');
const datetime = require('../helpers/datetime-helper');
const Sequelize = require('sequelize');
const AuthModel = require('../models/AuthModel');
const fs = require('fs');
const md5 = require('md5')
const {where} = require('sequelize');
// const authController = {};
router.get('/', (req, res) => {

    let size = parseInt(req.query.limit); //limit
    let page = parseInt(req.query.page); //page
    let orderField = req.query.orderField; 
    let orderValue = req.query.orderValue; 
    let filterField = req.query.filterField; 
    let filterValue = req.query.filterValue; 
    let search = req.query.search != null ? req.query.search : ''; //search 
    

    let modelAttr = AuthModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + search + '%' } });
    }); 

    let wheresF = [];
    if (filterField != null && filterValue != null ) {
        for (let i = 0; i < filterField.length; i++){ 
            if(filterField[i] != null || filterValue[i] != null){
                wheresF.push({ [filterField[i]]: { [Sequelize.Op.eq]:  filterValue[i]  } });
            }
        } 
    }
    if(req.query.limit != null){
        const resPage = pagination.getPagination(size, page);   
        AuthModel.findAndCountAll({ 
            limit: resPage.limit, 
            offset: resPage.offset, 
            order: [[orderField != null ? orderField : 'id_auth', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_auth.delete_at is null'), { 
                        [Sequelize.Op.and]: (wheresF),             
                        [Sequelize.Op.or]: (wheres),  
                    }) 
        })
        .then(result => {
            const resPageData = pagination.getPagingData(result['count'], resPage.limit); 

            const totalItems  = resPageData.totalItems;
            const totalPages = resPageData.totalPages;
            const data  = result['rows'];

            const dummy = {};
            dummy['page'] = page;
            dummy['limit'] = resPage.limit;
            dummy['totalItems'] = totalItems;
            dummy['totalPages'] = totalPages;
            dummy['data'] = data;
            response.success(res, { data: dummy });  
            
        })
        .catch(err => {
            response.error(res, { error: 'Please cek your Signal!' });
        }); 
    }else{
        AuthModel.findAll({
            order: [[orderField != null ? orderField : 'id_auth', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_auth.delete_at is null'), { 
                        [Sequelize.Op.and]: (wheresF),             
                        [Sequelize.Op.or]: (wheres),  
                    }) 
        }).then(data => {
            response.success(res, { data: data }); 
        }); 
    }
});

router.get('/find', (req, res) => {
    let modelAttr = AuthModel.rawAttributes;
    let wheres = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.query[val.field] != null) {
            wheres[val.field] = req.query[val.field];
        }
    });

    AuthModel.findAll({
        where: Sequelize.and(Sequelize.literal('delete_at is null'), wheres),  
        }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/search/:term', (req, res) => {
    let modelAttr = AuthModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + req.params.term + '%' } });
    });

    AuthModel.findAll({
        where: Sequelize.and(Sequelize.literal('tb_auth.delete_at is null'), { [Sequelize.Op.or]: (wheres) }), 
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/:id', (req, res) => {
    AuthModel.findOne({
        where: Sequelize.and({ [AuthModel.primaryKeyAttribute]: req.params.id },
        Sequelize.literal('tb_auth.delete_at is null')),
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.post('/insert', (req, res) => {
    let modelAttr = AuthModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {  
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }
        inputs['password'] = md5(req.body.password)  
    });

    AuthModel.create(inputs).then(data => {
        response.success(res, { message: 'Tambah Admin Berhasil!', data: data }); 
    }).catch((err) => {
        response.error(res, { error: err.message }); 
    });
});

router.put('/update/:id', (req, res) => {
    let modelAttr = AuthModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }
        inputs['password'] = md5(req.body.password)  

    });

    AuthModel.update(inputs, {
        where: {
            [AuthModel.primaryKeyAttribute]: req.params.id
        }
    }).then(data => {
        response.success(res, { message: 'update data success!', data: inputs }); 
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/delete/:id', (req, res) => {
    AuthModel.update({ delete_at: datetime.getCurrentDateTime() }, {
        where: {
            [AuthModel.primaryKeyAttribute]: req.params.id_auth
        }
    }).then(() => {
        response.success(res, { message: 'delete data success!' });

    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/hard_delete/:id', (req, res) => {
    if(req.params.id == null){
        response.error(res, { error: 'Parameter id cannot be null' });
    }
    AuthModel.destroy({ where: { [AuthModel.primaryKeyAttribute]: req.params.id } }).then(() => {
        response.success(res, { message: 'hard delete data success!' });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.post('/login',(req,res)=>{
    let modelAttr = AuthModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        inputs['username'] = req.body.username;
        inputs['password'] = md5(req.body.password);
    })

    AuthModel.findOne({
        where: Sequelize.and({username:req.body.username},Sequelize.literal('tb_auth.delete_at is null'))
    }).then(data => {
        if (data) {
            if (data.password != md5(req.body.password)) {
                response.error(res, { error:  'Password Salah'});  
            }else{
                response.success(res, {message:'Login Berhasil'});
            }
        }else{
            response.error(res, { error:  'Username Tidak Terdaftar'});  
        }
    })    
})
module.exports = router;