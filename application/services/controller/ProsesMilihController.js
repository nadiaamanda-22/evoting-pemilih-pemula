const router = require('express').Router();
const response = require('../helpers/response-parser');
const pagination = require('../helpers/pagination-parser');
const datetime = require('../helpers/datetime-helper');
const Sequelize = require('sequelize');
const PemilihModel = require('../models/PemilihModel');
const md5 = require('md5');
const fs = require('fs');
const {where} =require('sequelize');



router.post('/login',(req,res)=>{
    let modelAttr = PemilihModel.rawAttributes;
    let inputs = {};
    Object.values(modelAttr).forEach((val) => {
        inputs['username'] = req.body.username;
        inputs['password'] = md5(req.body.password);
    })

    PemilihModel.findOne({
        where: Sequelize.and({username:req.body.username},Sequelize.literal('tb_pemilih.delete_at is null'))
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
