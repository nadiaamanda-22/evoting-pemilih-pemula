'use strict'
const appConst = require('../config/constant');

module.exports = function (app) {
    app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
    app.use('/v' + appConst.apiVersion + '/kandidat', require('../controller/KandidatController'));
    // app.route('/v' + apiVersion + '/role/:id_role').get(Role.getId);
    // app.route('/v' + apiVersion + '/role').post(Role.Post);
    // app.route('/v' + apiVersion + '/role/:id_role').put(Role.Put);
    // app.route('/v' + apiVersion + '/role/:id_role').delete(Role.Delete);

    // app.route('/v' + appConst.apiVersion+ '/kandidat').get(Kandidat.getAll);
    // app.route('/v' + appConst.apiVersion+ '/kandidat/:id_kandidat').get(Kandidat.getId);
    // app.route('/v' + appConst.apiVersion+ '/kandidat').post(Kandidat.Post,upload.fields([{name:"foto",maxCount:1}]));
    // app.route('/v' + appConst.apiVersion+ '/kandidat/:id_kandidat').put(Kandidat.Put);
    // app.route('/v' + appConst.apiVersion+ '/kandidat/:id_kandidat').delete(Kandidat.Delete);
    
    // app.route('/v' + apiVersion+ '/pemilih').get(Pemilih.getAll);
    // app.route('/v' + apiVersion+ '/pemilih/:id_pemilih').get(Pemilih.getId);
    // app.route('/v' + apiVersion+ '/pemilih').post(Pemilih.Post);
    // app.route('/v' + apiVersion+ '/pemilih/:id_pemilih').put(Pemilih.Put);
    // app.route('/v' + apiVersion+ '/pemilih/:id_pemilih').delete(Pemilih.Delete);

}
// 'use strict';
// module.exports = (app) => {
//     app.use('/v' + appConst.apiVersion + '/role', require('../controller/RoleController'));
// }


