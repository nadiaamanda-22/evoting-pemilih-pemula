const cors = require('cors');
'use strict'
const appConst = require('../config/constant');

module.exports = (app) => {
    app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
    app.use('/v' + appConst.apiVersion + '/pemilih', require('../controller/PemilihController'));
    app.use('/v' + appConst.apiVersion + '/kandidat', require('../controller/KandidatController'));
    app.use('/v' + appConst.apiVersion + '/auth', require('../controller/AuthController'));
    app.use('/v' + appConst.apiVersion + '/prosesmilih', require('../controller/ProsesMilihController'));
}
// 'use strict';
// module.exports = (app) => {
//     app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
// }


