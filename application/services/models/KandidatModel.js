const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Model = Sequelize.Model;

class KandidatModel extends Model { }
KandidatModel.init({
    id_kandidat: {
        type: Sequelize.INTEGER,
        primaryKey: true
    },
    nama_ketua: {
        type: Sequelize.CHAR
    },
    nama_wakil: {
        type: Sequelize.CHAR
    },
    foto_kandidat: {
        type: Sequelize.CHAR
    },
    hasil:{
        type:Sequelize.INTEGER
        }
}, {
    defaultScope: { 
        where: Sequelize.literal('tb_kandidat.delete_at is null') 
    },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'tb_kandidat',
    sequelize,
    modelName: 'tb_kandidat'
    // options
});

module.exports = KandidatModel;
