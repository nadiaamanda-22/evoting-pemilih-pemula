const sequelize = require('../config/database');
const Sequelize = require('sequelize');
const Model = Sequelize.Model;

class Api_auth extends Model { }
Api_auth.init({
    app_id: {
        type: Sequelize.CHAR,
        primaryKey: true
    },
    platform: {
        type: Sequelize.ENUM('mobile', 'desktop')
    }
    , app_name: {
        type: Sequelize.CHAR
    }
    , author_name: {
        type: Sequelize.CHAR
    }
    , author_email: {
        type: Sequelize.CHAR
    }
    , author_password: {
        type: Sequelize.CHAR
    }
    , access_token: {
        type: Sequelize.CHAR
    }
    , refresh_token: {
        type: Sequelize.CHAR
    }
    , token_lifetime: {
        type: Sequelize.INTEGER
    }
    , refresh_token_lifetime: {
        type: Sequelize.INTEGER
    }
    , created_at: {
        type: Sequelize.DATE,
    }
    , updated_at: {
        type: Sequelize.DATE
    }
    , deleted_at: {
        type: Sequelize.DATE
    }
    , last_regen_refresh_token: {
        type: Sequelize.DATE
    }
}, {

    defaultScope: { where: Sequelize.literal('delete_at is null') },
    deletedAt: 'delete_at',
    createdAt: 'create_at',
    updatedAt: 'update_at',
    tableName: 'api_auth',
    sequelize,
    modelName: 'api_auth'
    // options
});

module.exports = Api_auth;