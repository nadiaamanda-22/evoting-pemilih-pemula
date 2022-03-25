'use strict';

var response = require('./res');
var connection = require('./connection');

exports.index = function(req,res){
    response.ok("Aplikasi REST API berhasil",res)
};

exports.tampildatarole = function(req,res){
    connection.query('select * from tb_role',function(error, rows, fields){
        if (error) {
            connection.log(error);
        }else{
            response.ok(rows,res)
        }
    })
}

exports.tampildatarolebyid = function(req,res){
   let id = req.params.id;
    connection.query('select * from tb_role where id_role = ?',[id], 
    function(error, rows, fields){ 
        if (error) {
            console.log(error);
        }else{
            response.ok(rows,res);
        }
    })
}

exports.tambahrole = function(req,res){
    var role = req.body.role;

    connection.query('INSERT INTO tb_role (role) VALUES(?) ',[role], function(error,rows,field){
        if (error) {
            console.log(error);
        }else{
            response.ok("Berhasil Nambah OYYY", res)
        }
    })
}

exports.ubahrole = function(req,res){
    // let id = req.params.id;
    var id = req.body.id_role;
    var role = req.body.role;

    connection.query('UPDATE tb_role SET role=? WHERE id_role=?',[role,id],
    function(error, rows, fields){
        if (error) {
            console.log(error);
        }else{
            response.ok("Berhasil Ubah Oyyyy",res)
        }
    })
}

exports.hapusrole = function(req,res){
    var id = req.body.id_role;

    connection.query('DELETE FROM tb_role WHERE id_role=?',[id],
    function(error,rows,fields){
        if (error) {
            console.log(error);
        }else{
            response.ok("Berhasil Hapus OYYY",res)
        }
    })
}

exports.tampilgroup = function(req,res){
    connection.query('SELECT tb_auth.id_auth,tb_auth.id_role,tb_auth.username,tb_auth.password,tb_role.role FROM tb_auth join tb_role ON tb_role.id_role = tb_auth.id_role',
    function (error, rows, fields){
        if(error){
            console.log(error);
        }else{
            response.tampilnested(rows.res)
        }
    })
}