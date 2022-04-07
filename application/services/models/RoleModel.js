const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Model = Sequelize.Model;

class RoleModel extends Model { }
RoleModel.init({
    id_role: {
        type: Sequelize.INTEGER,
        primaryKey: true
    },
    role: {
        type: Sequelize.CHAR
    }
}, {
    defaultScope: { 
        where: Sequelize.literal('tb_role.delete_at is null') 
    },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'tb_role',
    sequelize,
    modelName: 'tb_role'
    // options
});

module.exports = RoleModel;
