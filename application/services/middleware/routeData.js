const AuthModel = require('../models/AuthModel');
// const crypto = require('crypto');
// const datetime = require('../helpers/datetime-helper');
// const moment = require('moment');

const routeData = {
    getAccessToken: (token = null) => {
        return AuthModel.findOne({
            where: {
                access_token: token
            }
        });
    },
    // refreshAccessToken: (refreshToken = null) => {
    //     return AuthModel.findOne({
    //         where: {
    //             refresh_token: refreshToken
    //         }
    //     });
    // },
    // auth: (req) => {
    //     let accessToken = req.headers['x-access-token'];
    //     accessToken = (accessToken != null) ? accessToken : null;
    //     let useragent = req.useragent;
    //     console.log(useragent)
    //     return new Promise((resolve, reject) => {
    //         AuthModel.findOne({
    //             where: {
    //                 access_token: accessToken
    //             }
    //         }).then((result) => {
    //             if (result != null) {
    //                 let isAuthPlatform = false;
    //                 if (result.platform == 'mobile') { isAuthPlatform = useragent.isMobile; }
    //                 else if (result.platform == 'desktop') { isAuthPlatform = useragent.isDesktop; }

    //                 let isTokenLifeTimeValid = false;
    //                 let currentTime = moment();
    //                 let targetTime = moment(result.updated_at, "YYYY-MM-DD'T'HH:mm:ss:SSSZ");
    //                 isTokenLifeTimeValid = parseInt(currentTime.diff(targetTime, 'minutes')) <= result.token_lifetime;

    //                 if (isAuthPlatform && isTokenLifeTimeValid) {
    //                     resolve({ is_authenticated: true, access_token: result.access_token, refresh_token: result.refresh_token });
    //                 }
    //                 else {
    //                     let regenAccessToken = crypto.createHash('md5').update('access_token' + result.app_id + ' at ' + datetime.getCurrentDateTime()).digest('hex');
    //                     AuthModel.update({ access_token: regenAccessToken }, {
    //                         where: {
    //                             app_id: result.app_id
    //                         }
    //                     }).then((result) => {
    //                         resolve({ is_authenticated: false, access_token: null, refresh_token: null });
    //                     }).catch((err) => reject(err));
    //                 }
    //             }
    //             else {
    //                 resolve({ is_authenticated: false, access_token: null, refresh_token: null });
    //             }

    //         }).catch((err) => reject(err))
    //     });
    // },
};

module.exports = routeData;