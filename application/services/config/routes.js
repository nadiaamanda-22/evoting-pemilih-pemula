'use strict'

const express = require('express');
const Role = require('../controller/RoleController')
const { json } = require('express/lib/response');
const apiVersion = ('API_VERSION', 1);

module.exports = function (app) {
    app.route('/v' + apiVersion + '/role').get(Role.getAll);
    app.route('/v' + apiVersion + '/role/:id_role').get(Role.getId);
    app.route('/v' + apiVersion + '/role').post(Role.Post);
    app.route('/v' + apiVersion + '/role/:id_role').put(Role.Put);
    app.route('/v' + apiVersion + '/role/:id_role').delete(Role.Delete);

}
// 'use strict';
// module.exports = (app) => {
//     app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
// }




// router.get('/tampilrole', Role.getAll );


// app.route('/').get(jsonku.index);
//     app.route('/tampilrole/:id').get(jsonku.tampildatarolebyid);

//     app.route('/tambahrole').post(jsonku.tambahrole);

//     app.route('/ubahrole').put(jsonku.ubahrole);

//     app.route('/hapusrole').delete(jsonku.hapusrole);

//     app.route('/tampilauthrole').get(jsonku.tampilgroup);
// }