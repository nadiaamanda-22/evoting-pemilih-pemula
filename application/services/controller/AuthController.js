const router = require('express').Router();
const response = require('../helpers/response-parser');
const apiMiddleware = require('../middleware/apiMiddleware');
const crypto = require('crypto');
const AuthModel = require('../models/AuthModel');
const datetime = require('../helpers/datetime-helper');
const moment = require('moment');

router.post('/',(req,res) => {
    if(req.headers['user-email'] == null || req.headers['user-password'] == null){
        response.error(res,
            {
                error: 'Authentication failed'
            });
    }

    let pass = crypto.createHash('md5').update(req.headers['user-password']).digest('hex').toString();
    apiMiddleware.getAccessToken(req.headers['user-email'],pass).then((result) =>{
        if(result != null){
            let regenRefreshToken = crypto.createHash('md5').update('refresh_token' + result.author_email + 'at' +datetime.getCurrentDateTime()).digest('hex');
            let regenAccessToken = crypto.createHash('md5').update('access_token' + result.author_email + 'at' + datetime.getCurrentDateTime()).digest('hex');

            AuthModel.update({
                refresh_token: regenRefreshToken,
                access_token: regenAccessToken,
                last_regen_refresh_token: datetime.getCurrentDateTime()
            },{
                where: {
                    author_email: req.headers['user-email']
                }
            }).then((resp) => {
                response.success(res,
                    {
                        message: 'Authentication success',
                        data:{
                            is_authenticated: true,
                            access_token: regenAccessToken,
                            refresh_token: regenRefreshToken
                        }
                    })
                }).catch((err) => console.log(err));
            } else {
                response.success(res,
                    {
                        message: 'Authentiaction failed!', 
                        data: {
                            is_authenticated: false,
                            access_token: null,
                            refresh_token: null
                        }
                    });
            }
        }).catch((err) => {
            response.error(res,
                {
                    error: 'Email or Password is not registered' });
                });
        })
        router.post('/refresh_token', (req, res) => {
            if(req.headers['x-refresh-token'] == null || req.headers['user-email'] == null || req.headers['user-password'] == null){
                response.error(res,
                    {
                        error: 'Authentication failed!'
                    })
            }
            let pass = crypto.createHash('md5').update(req.headers['user-password']).digest('hex').toString();
            apiMiddleware.refreshAccessToken(req.headers['x-refresh-token'],req.headers['user-email'],pass)
            .then((result) => {
                if(result != null){
                    let isTokenLifeTimeValid = false;
                    let currentTime = moment();
                    let targetTime = moment(result.last_regen_refresh_token,"YYYY-MM-DD'T'HH:mm:ss:SSSZ");
                    isTokenLifeTimeValid = parseInt(currentTime.diff(targetTime,'hours')) <=result.refresh_token_lifetime;
                    console.log(isTokenLifeTimeValid);

                    if (isTokenLifeTimeValid){
                        let regenAccessToken = crypto.createHash('md5').update('access_token' + result.author_email + ' at ' + datetime.getCurrentDateTime()).digest('hex');
                        AuthModel.update({
                            access_token: regenAccessToken
                        },{
                            where: {
                                refresh_token: req.headers['x-refresh-token']
                            }
                        }).then((resp) => {
                            response.success(res, {
                                message: 'Authentication success',
                                data: {
                                    is_authenticated: false,
                                    access_token: null,
                                    refresh_token: null
                                }
                            });
                        }).catch((err) => console.log(err))
                    }else{
                        response.success(res,
                            {
                                message: 'Authentication failed, please do re-authentication',
                                data: {
                                    is_authenticated: false,
                                    access_token: null,
                                    refresh_token: null
                                }
                            })
                    }
                }else{
                    response.success(res, {
                        message: 'Authentication failed',
                        data: {
                            is_authenticated: false,
                            access_token: null,
                            refresh_token: null
                        }
                    })
                }
            }).catch((err) => {
                console.log(err);
                response.error(res, {
                    error: 'token is not registered'
                })
            })
        })

        module.exports = router;