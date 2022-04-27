const router = require('express').Router();
const response = require('../helpers/response-parser');
const pagination = require('../helpers/pagination-parser');
const datetime = require('../helpers/datetime-helper');
const Sequelize = require('sequelize');
const KandidatModel = require('../models/KandidatModel');
const fs = require('fs');
const {where} = require('sequelize');
// const RoleController = {};
const multer = require('multer');
const storage = multer.diskStorage({
    destination: function(req, file, cb){
        const dir = "assets";
        if(!fs.existsSync(dir)){
            fs.mkdir(dir,{recursive: true});
        }
        cb(null, dir);
    },
    filename: function(req, file, cb){
        const originalname = file.originalname;
        cb(null, Date.now() + '-' + file.originalname)
    }
});

const upload = multer({storage: storage});

router.get('/', (req, res) => {

    let size = parseInt(req.query.limit); //limit
    let page = parseInt(req.query.page); //page
    let orderField = req.query.orderField; 
    let orderValue = req.query.orderValue; 
    let filterField = req.query.filterField; 
    let filterValue = req.query.filterValue; 
    let search = req.query.search != null ? req.query.search : ''; //search 
    

    let modelAttr = KandidatModel.rawAttributes;
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

    // console.log({a:wheres , b:wheresF});

    if(req.query.limit != null){
        const resPage = pagination.getPagination(size, page);   
        KandidatModel.findAndCountAll({ 
            limit: resPage.limit, 
            offset: resPage.offset, 
            order: [[orderField != null ? orderField : 'id_kandidat', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_kandidat.delete_at is null'), { 
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
        KandidatModel.findAll({
            order: [[orderField != null ? orderField : 'id_kandidat', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_kandidat.delete_at is null'), { 
                        [Sequelize.Op.and]: (wheresF),             
                        [Sequelize.Op.or]: (wheres),  
                    }) 
        }).then(data => {
            response.success(res, { data: data }); 
        }); 
    }
});

router.get('/find', (req, res) => {
    let modelAttr = KandidatModel.rawAttributes;
    let wheres = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.query[val.field] != null) {
            wheres[val.field] = req.query[val.field];
        }
    });

    KandidatModel.findAll({
        where: Sequelize.and(Sequelize.literal('delete_at is null'), wheres),  
        }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/search/:term', (req, res) => {
    let modelAttr = KandidatModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + req.params.term + '%' } });
    });

    KandidatModel.findAll({
        where: Sequelize.and(Sequelize.literal('tb_kandidat.delete_at is null'), { [Sequelize.Op.or]: (wheres) }), 
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/:id', (req, res) => {
    KandidatModel.findOne({
        where: Sequelize.and({ [KandidatModel.primaryKeyAttribute]: req.params.id },
        Sequelize.literal('tb_kandidat.delete_at is null')),
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.post('/insert',upload.fields([{name:"foto_kandidat",maxCount:1}]), (req, res) => {
    console.log(req.files,req.body);
    const a = console.log(foto_kandidat[6]);
// router.post('/insert', (req, res) => {
    let modelAttr = KandidatModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {  
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        } else if(req.files == true) {
            inputs[val.fieldName] = req.files[0];
        }
    });

    KandidatModel.create(inputs).then(data => {
        response.success(res, { message: 'create data success!', data: data }); 
    }).catch((err) => {
        response.error(res, { error: err.message }); 
    });
});

router.put('/update/:id', (req, res) => {
    let modelAttr = KandidatModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }
    });

    KandidatModel.update(inputs, {
        where: {
            [KandidatModel.primaryKeyAttribute]: req.params.id
        }
    }).then(data => {
        response.success(res, { message: 'update data success!', data: inputs }); 
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/delete/:id', (req, res) => {
    KandidatModel.update({ delete_asasdt: datetime.getCurrentDateTime() }, {
        where: {
            [KandidatModel.primaryKeyAttribute]: req.params.id_kandidat
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
    KandidatModel.destroy({ where: { [KandidatModel.primaryKeyAttribute]: req.params.id } }).then(() => {
        response.success(res, { message: 'hard delete data success!' });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

module.exports = router;