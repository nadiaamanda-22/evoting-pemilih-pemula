const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Model = Sequelize.Model;

class RoleModel extends Model { }
RoleModel.init({
    id_role: {
        type: Sequelize.INTEGER
        , primaryKey: true
    },
    role: {
        type: Sequelize.CHAR
    }, 
    create_at: {
        type: Sequelize.DATE
    }
    , update_at: {
        type: Sequelize.DATE
    }
    , delete_at: {
        type: Sequelize.DATE
    } 
}, {
    defaultScope: { where: Sequelize.literal('role.delete_at is null') },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'role',
    sequelize,
    modelName: 'role'
    // options
});

module.exports = RoleModel;
