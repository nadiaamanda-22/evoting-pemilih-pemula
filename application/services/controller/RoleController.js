const router = require('express').Router();
const response = require('../helpers/response-parser');
const pagination = require('../helpers/pagination-parser');
const datetime = require('../helpers/datetime-helper');
const Sequelize = require('sequelize');
const RoleModel = require('../models/RoleModel');
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
        cb(null, file.originalname)
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
    

    let modelAttr = RoleModel.rawAttributes;
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
        RoleModel.findAndCountAll({ 
            limit: resPage.limit, 
            offset: resPage.offset, 
            order: [[orderField != null ? orderField : 'id_role', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_role.delete_at is null'), { 
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
        RoleModel.findAll({
            order: [[orderField != null ? orderField : 'id_role', orderValue != null ? orderValue : 'asc']], 
            where:  Sequelize.and(Sequelize.literal('tb_role.delete_at is null'), { 
                        [Sequelize.Op.and]: (wheresF),             
                        [Sequelize.Op.or]: (wheres),  
                    }) 
        }).then(data => {
            response.success(res, { data: data }); 
        }); 
    }
});

router.get('/find', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let wheres = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.query[val.field] != null) {
            wheres[val.field] = req.query[val.field];
        }
    });

    RoleModel.findAll({
        where: Sequelize.and(Sequelize.literal('delete_at is null'), wheres),  
        }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/search/:term', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + req.params.term + '%' } });
    });

    RoleModel.findAll({
        where: Sequelize.and(Sequelize.literal('tb_role.delete_at is null'), { [Sequelize.Op.or]: (wheres) }), 
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.get('/:id', (req, res) => {
    RoleModel.findOne({
        where: Sequelize.and({ [RoleModel.primaryKeyAttribute]: req.params.id },
        Sequelize.literal('tb_role.delete_at is null')),
    }).then(data => {
        response.success(res, { data: data });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

// router.post('/insert',upload.fields([{name:"foto",maxCount:1}]), (req, res) => {
//     console.log(req.files,req.body);
router.post('/insert', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {  
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }  
    });

    RoleModel.create(inputs).then(data => {
        response.success(res, { message: 'create data success!', data: data }); 
    }).catch((err) => {
        response.error(res, { error: err.message }); 
    });
});

router.put('/update/:id', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null) {
            inputs[val.fieldName] = req.body[val.field];
        }
    });

    RoleModel.update(inputs, {
        where: {
            [RoleModel.primaryKeyAttribute]: req.params.id
        }
    }).then(data => {
        response.success(res, { message: 'update data success!', data: inputs }); 
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

router.delete('/delete/:id', (req, res) => {
    RoleModel.update({ delete_asasdt: datetime.getCurrentDateTime() }, {
        where: {
            [RoleModel.primaryKeyAttribute]: req.params.id_role
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
    RoleModel.destroy({ where: { [RoleModel.primaryKeyAttribute]: req.params.id } }).then(() => {
        response.success(res, { message: 'hard delete data success!' });
    }).catch((err) => {
        response.error(res, { error: err.message });
    });
});

// RoleController.getAll = async function (req, res) {
//     try {
//         let role = await RoleModel.findAll()
//             if (role.length > 0) {
//                 res.status(200).json({
//                     message: 'Ada Data Role',
//                     data: role
//                 })                
//             }else{
//                 res.status(200).json({
//                     message: 'Tidak Ada Data Role'
//                 })
//             }
//         }
//         catch(error){
//         res.status(404).json({
//             message:error
//         })
//     }
// }

// RoleController.getId = async function (req, res){
//     try {
//         let role = await RoleModel.findAll({
//             where: {
//                 id_role: req.params.id_role
//             }
//         })
//         if (role.length > 0) {
//             res.status(200).json({
//                 message: 'Ada Data Role',
//                 data: role
//             })
//         }else{
//             res.status(200).json({
//                 message: 'Tidak Ada Data Role',
//                 data:[]
//             })
//             }
//     } catch (error){
//         res.status(400).json({
//             message: error.message
//         })
//      }
// }


// RoleController.Post = async function (req, res){
//     try {
//         let role = await RoleModel.create({
//             role: req.body.role,
//         })
//         res.status(201).json({
//             message: 'Berhasil Tambah Data Role',
//             data: role
//         })
//     } catch (error){
//         res.status(404).json({
//             message: error.message
//         })
//     }
// }

// RoleController.Put = async function (req, res){
//     try{
//         let role = await RoleModel.update({
//             role: req.body.role
//         },{
//             where : {
//                 id_role : req.params.id_role
//             }
//         })
//         res.status(200).json({
//             message: 'Berhasil Ubah Data Role'
//         })
//     } catch(error){
//         res.status(404).json({
//             message: error.message
//         })
//     }
// }

// RoleController.Delete = async function (req, res){
//     try{
//         let role = await RoleModel.destroy({
//             where: {
//                 id_role: req.params.id_role
//             }
//         })
//         res.status(200).json({
//             message: 'Berhasil Hapus Data Role'
//         })
//     }catch(error){
//         res.status(404).json({
//             message: error.message
//         })
//     }
// }

module.exports = router;