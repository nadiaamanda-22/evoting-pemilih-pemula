const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Model = Sequelize.Model;

class AuthModel extends Model { }
AuthModel.init({
    id_auth: {
        type: Sequelize.INTEGER,
        primaryKey: true
    },
    id_role: {
        type: Sequelize.INTEGER,
    },
    username:{
        type:Sequelize.CHAR
    },
    password:{
        type:Sequelize.CHAR
    }
}, {
    defaultScope: { 
        where: Sequelize.literal('tb_auth.delete_at is null') 
    },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'tb_auth',
    sequelize,
    modelName: 'tb_auth'
    // options
});

module.exports = AuthModel;
