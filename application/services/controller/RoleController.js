const RoleModel = require('../models/RoleModel');
const router = require('express').Router();
const RoleController = {};

RoleController.getAll = async function (req, res) {
    try {
        let role = await RoleModel.findAll()
            if (role.length > 0) {
                res.status(200).json({
                    message: 'Ada Data Role',
                    data: role
                })                
            }else{
                res.status(200).json({
                    message: 'Tidak Ada Data Role'
                })
            }
        }
        catch(error){
        res.status(404).json({
            message:error
        })
    }
}

RoleController.getId = async function (req, res){
    try {
        let role = await RoleModel.findAll({
            where: {
                id_role: req.params.id_role
            }
        })
        if (role.length > 0) {
            res.status(200).json({
                message: 'Ada Data Role',
                data: role
            })
        }else{
            res.status(200).json({
                message: 'Tidak Ada Data Role',
                data:[]
            })
            }
    } catch (error){
        res.status(400).json({
            message: error.message
        })
     }
}


RoleController.Post = async function (req, res){
    try {
        let role = await RoleModel.create({
            role: req.body.role,
        })
        res.status(201).json({
            message: 'Berhasil Tambah Data Role',
            data: role
        })
    } catch (error){
        res.status(404).json({
            message: error.message
        })
    }
}

RoleController.Put = async function (req, res){
    try{
        let role = await RoleModel.update({
            role: req.body.role
        },{
            where : {
                id_role : req.params.id_role
            }
        })
        res.status(200).json({
            message: 'Berhasil Ubah Data Role'
        })
    } catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

RoleController.Delete = async function (req, res){
    try{
        let role = await RoleModel.destroy({
            where: {
                id_role: req.params.id_role
            }
        })
        res.status(200).json({
            message: 'Berhasil Hapus Data Role'
        })
    }catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

module.exports = RoleController;