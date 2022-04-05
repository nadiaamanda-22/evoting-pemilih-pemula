'use strict'
const router = require('express').Router();
const bcrypt = require('bcrypt');
const fs = require('fs');
const response = require('../helpers/response-parser');
const RoleModel = require('../models/RoleModel');
const Sequelize = require('sequelize');
const constant = require('../config/constant')
const crypto = require('crypto');
const datetime = require('../helpers/datetime-helper');
const middleware = require('../config/middleware');
const { where } = require('sequelize');

middleware.router(router);

router.get('/',(req,res) => {
    let size = parseInt(req.query.limit);
    let page = parseInt(req.query.page);
    let orderField = req.query.orderField;
    let orderValue = req.query.orderValue;
    let filterField = req.query.filterField;
    let filterValue = req.query.filterValue;
    let search = req.query.search != null ? req.query.search : '';

    let modelAttr = RoleModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({ [val.field]: { [Sequelize.Op.like]: '%' + search + '%' } });
    })

    let WheresF = [];
    if(filterField != null && filterValue != null){
        for (let i = 0; i<filterField.length; i++){
            if(filterField[i] != null || filterValue[i] != null){
                wheresF.push({[filterField[i]]: {[Sequelize.Op.eq]: filterValue[i]}});
            }
        }
    }

    if(req.query.limit != null){
        const resPage = pagination.getPagination(size, page);
        RoleModel.findAndCountAll({
            limit: resPage.limit,
            offset: resPage.offset,
            order:[[orderField != null ? orderField : 'id', orderValue != null ? orderValue : 'asc']],
            where: Sequelize.and(Sequelize.literal('role.delete_at is null'), {
                [Sequelize.Op.and]: (wheresF),
                [Sequelize.Op.or]: (wheres),
            })
        }).then(result => {
            const resPageData = pagination.getPagingData(result['count'],resPage.limit);
            const totalItems = resPageData.totalItems;
            const totalPages = resPageData.totalPages;
            const data = result['rows'];
        
            const dummy = {};
            dummy['page'] = page;
            dummy['limit'] = resPage.limit;
            dummy['totalItems'] = totalItems;
            dummy['totalPages'] = totalPages;
            dummy['data'] = data;
            response.success(res,
                {
                    data:dummy
                });
        }).catch(err => {
            response.error(res,{
                error: 'Please check your signal'
            });
        });
    }else{
        RoleModel.findAll({
            order: [[orderField != null ? orderField : 'id',orderValue != null ? orderValue : 'asc']],
            where: Sequelize.and(Sequelize.literal('role.delete_at is null'),{
                [Sequelize.Op.and]: (wheresF),
                [Sequelize.Op.or]: (wheres),
            })
        }).then(data => {
            response.success(res, {
                data: data
            });
        });
    }
});

router.get('/find', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let wheres = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.query[val.field] != null){
            wheres[val.field] = req.query[val.field]
        }
    });

    RoleModel.findAll({
        where: Sequelize.and(Sequelize.literal('delete_at is null'), wheres),
    }).then(data => {
        response.success(res, 
            {
                data: data
            });
    });
});

router.get('search/:term', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let wheres = [];
    Object.values(modelAttr).forEach((val) => {
        wheres.push({[val.field]: {[Sequelize.Op.like]: '%' + req.params.term + '%'}});
    });

    RoleModel.findAll({
        where: Sequelize.and(Sequelize.literal('role.delete_at is null'), {[Sequelize.Op.or]: (wheres)}),
    }).then(data => {
        response.success(res,
            {
                data:data
            });
    }).catch((err) => {
        response.error(res, {
            error: err.message
        });
    });
});

router.get('/:id', (req, res) => {
    RoleModel.findOne({
        where: Sequelize.and({[RoleModel.primaryKeyAttribute]: req.params.id},
        Sequelize.literal('role.delete_at is null')),
    }).then(data => {
        response.success(res,{
            data: data
        });
    }).catch((err) => {
        response.error(res,{
            error: err.message
        });
    });
});

router.post('/insert', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.filed] != null){
            inputs[val.fieldName] = req.body[val.field];
        }
    });

    RoleModel.create(inputs).then(data => {
        response.success(res, {
            message: 'create data success',
            data: data
        });
    }).catch((err) => {
        response.error(res,{
            error: err.message
        });
    });
})

router.put('/update/:id', (req, res) => {
    let modelAttr = RoleModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        if (req.body[val.field] != null){
            inputs[val.fieldName] = req.body[val.field];
        }
    });

    RoleModel.update(inputs, {
        where: {
            [RoleModel.primaryKeyAttribute]: req.params.id
        }
    }).then(data => {
        response.success(res, {
            message: 'update data success',
            data: inputs
        });
    }).catch((err) => {
        response.error(res, {
            error: err.message
        });
    });
});

router.delete('/delete/:id', (req, res) => {
    RoleModel.update({delete_at: datetime.getCurrentDateTime() },{
        where: {
            [RoleModel.primaryKeyAttribute]: req.params.id
        }
    }).then(() => {
        response.success(res,{
            message: 'delete data success'
        });
    }).catch((err) => {
        response.error(res,{
            error: err.message
        });
    });
});

router.delete('/hard_delete/:id', (req, res) => {
    if(req.params.id == null){
        response.error(res,{
            error: 'Parameter id cannot be null'
        });
    }
    RoleModel.destroy({
        where: {[RoleModel.primaryKeyAttribute]: req.params.id}
    }).then(() => {
        response.success(res, {
            message: 'hard delete data success'
        });
    }).catch((err) => {
        response.error(res, {
            error: err.message
        });
    });
});

module.exports = router;