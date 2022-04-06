'use strict';
const appConst = require('../config/constant');
module.exports = (app) => {
    app.use('/v' + appConst.apiVersion + '/auth', require('../controller/AuthController'));
    app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
}