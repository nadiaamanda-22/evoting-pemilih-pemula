const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Bcrypt = require('bcrypt');
const Model = Sequelize.Model;

class PemilihModel extends Model { }
PemilihModel.init({
    id_pemilih: {
        type: Sequelize.INTEGER,
        primaryKey: true
    },
    nama_pemilih: {
        type: Sequelize.CHAR
    },
    jk_pemilih: {
        type: Sequelize.ENUM,
        values:['Perempuan','Laki-laki']
    },
    nama_ibu_kandung: {
        type: Sequelize.CHAR
    },
    nomor_induk_kependudukan: {
        type: Sequelize.CHAR
    },
    username: {
        type: Sequelize.CHAR
    },
    password: {
        type: Sequelize.CHAR
    },
    status_pemilihan: {
        type: Sequelize.ENUM,
        values:['0','1']
    },
    email: {
        type: Sequelize.CHAR
    },
    imei: {
        type: Sequelize.CHAR
    }
}, {
    defaultScope: { 
        where: Sequelize.literal('tb_pemilih.delete_at is null') 
    },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'tb_pemilih',
    sequelize,
    modelName: 'tb_pemilih'
    
});

module.exports = PemilihModel;
