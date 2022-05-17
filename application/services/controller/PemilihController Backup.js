const PemilihModel = require('../models/PemilihModel');
const crypto = require('crypto');
const md5 = require('md5');
const router = require('express').Router();
const PemilihController = {};

PemilihController.getAll = async function (req, res) {
    try {
        let pemilih = await PemilihModel.findAll()
            if (pemilih.length > 0) {
                res.status(200).json({
                    message: 'Ada Data Pemilih',
                    data: pemilih
                })                
            }else{
                res.status(200).json({
                    message: 'Tidak Ada Data Pemilih'
                })
            }
        }
        catch(error){
        res.status(404).json({
            message:error
        })
    }
}

PemilihController.getId = async function (req, res){
    try {
        let pemilih = await PemilihModel.findAll({
            where: {
                id_pemilih: req.params.id_pemilih
            }
        })
        if (pemilih.length > 0) {
            res.status(200).json({
                message: 'Ada Data Pemilih',
                data: pemilih
            })
        }else{
            res.status(200).json({
                message: 'Tidak Ada Data Pemilih',
                data:[]
            })
            }
    } catch (error){
        res.status(400).json({
            message: error.message
        })
     }
}


PemilihController.Post = async function (req, res){
    try {
        let pemilih = await PemilihModel.create({
            nama_pemilih: req.body.nama_pemilih,
            nama_ibu_kandung: req.body.nama_ibu_kandung,
            nomor_induk: req.body.nomor_induk,
            nomor_induk_kependudukan: req.body.nomor_induk_kependudukan,
            username: req.body.username,
            password: crypto.createHash('md5').update(req.body.password).digest('hex'),
            email: req.body.email,
            imei: req.body.imei,
            })
        res.status(201).json({
            message: 'Berhasil Tambah Data Pemilih',
            data: pemilih
        })
    } catch (error){
        res.status(404).json({
            message: error.message
        })
    }
}

PemilihController.Put = async function (req, res){
    try{
        let pemilih = await PemilihModel.update({
            nama_pemilih: req.body.nama_pemilih,
            nama_ibu_kandung: req.body.nama_ibu_kandung,
            nomor_induk: req.body.nomor_induk,
            nomor_induk_kependudukan: req.body.nomor_induk_kependudukan,
            username: req.body.username,
            password: crypto.createHash('md5').update(req.body.password).digest('hex'),
            email: req.body.email,
            imei: req.body.imei,
            },{
            where : {
                id_pemilih : req.params.id_pemilih
            }
        })
        res.status(200).json({
            message: 'Berhasil Ubah Data Pemilih'
        })
    } catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

PemilihController.Delete = async function (req, res){
    try{
        let pemilih = await PemilihModel.destroy({
            where: {
                id_pemilih: req.params.id_pemilih
            }
        })
        res.status(200).json({
            message: 'Berhasil Hapus Data Pemilih'
        })
    }catch(error){
        res.status(404).json({
            message: error.message
        })
    }
}

module.exports = PemilihController;