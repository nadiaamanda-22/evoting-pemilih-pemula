const KandidatModel = require('../models/KandidatModel');
const router = require('express').Router();
const KandidatController = {};

KandidatController.getAll = async function (req, res) {
    try {
        let kandidat = await KandidatModel.findAll()
            if (kandidat.length > 0) {
                res.status(200).json({
                    message: 'Ada Data Kandidat',
                    data: kandidat
                })                
            }else{
                res.status(200).json({
                    message: 'Tidak Ada Data Kandidat'
                })
            }
        }
        catch(error){
        res.status(404).json({
            message:error
        })
    }
}

KandidatController.getId = async function (req, res){
    try {
        let kandidat = await KandidatModel.findAll({
            where: {
                id_kandidat: req.params.id_kandidat
            }
        })
        if (kandidat.length > 0) {
            res.status(200).json({
                message: 'Ada Data Kandidat',
                data: kandidat
            })
        }else{
            res.status(200).json({
                message: 'Tidak Ada Data Kandidat',
                data:[]
            })
            }
    } catch (error){
        res.status(400).json({
            message: error.message
        })
     }
}


KandidatController.Post = async function (req, res){
    try {
        let kandidat = await KandidatModel.create({
            nama_kandidat: req.body.nama_kandidat,
            pasangan_kandidat: req.body.pasangan_kandidat,
            foto_kandidat: req.body.foto_kandidat,
        })
        res.status(201).json({
            message: 'Berhasil Tambah Data Kandidat',
            data: kandidat
        })
    } catch (error){
        res.status(404).json({
            message: error.message
        })
    }
}

KandidatController.Put = async function (req, res){
    try{
        let kandidat = await KandidatModel.update({
            nama_kandidat: req.body.nama_kandidat,
            pasangan_kandidat: req.body.pasangan_kandidat,
            foto_kandidat: req.body.foto_kandidat,
        },{
            where : {
                id_kandidat : req.params.id_kandidat
            }
        })
        res.status(200).json({
            message: 'Berhasil Ubah Data Kandidat'
        })
    } catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

KandidatController.Delete = async function (req, res){
    try{
        let kandidat = await KandidatModel.destroy({
            where: {
                id_kandidat: req.params.id_kandidat
            }
        })
        res.status(200).json({
            message: 'Berhasil Hapus Data Kandidat'
        })
    }catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

module.exports = KandidatController;