'use strict'

const { json } = require('express/lib/response');

module.exports = function (app) {
    var jsonku = require('./controller');

    app.route('/').get(jsonku.index);

    app.route('/tampilrole').get(jsonku.tampildatarole);

    app.route('/tampilrole/:id').get(jsonku.tampildatarolebyid);

    app.route('/tambahrole').post(jsonku.tambahrole);

    app.route('/ubahrole').put(jsonku.ubahrole);

    app.route('/hapusrole').delete(jsonku.hapusrole);

    app.route('/tampilauthrole').get(jsonku.tampilgroup);
}