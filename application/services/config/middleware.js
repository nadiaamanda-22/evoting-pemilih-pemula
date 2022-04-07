// const apiMiddleware = require('../middleware/apiMiddleware');
const response = require('../helpers/response-parser');

const middleware = {
    app: (app) => {
        app.use((req,res,next) =>{
            res.header("Access-Control-Allow-Origin","*");
            res.header("Access-Control-Allow-Headers","Origin, user-email, user-password, X-Requested-With, Content-Type, Accept, X-APP-ID, X-ACCESS-TOKEN, X-REFRESH-TOKEN");
            res.header("Access-Control-Allow-Methods","*");
            next();
        });
    },

    router:(route)=>{
        route.use((req,res,next) => {
        //     apiMiddleware.auth(req).then((result) => {
        //         if(result != null && result.is_authenticated){
        //             next();
        //         }else{
        //             response.error(res,
        //                 {
        //                     status: 401,
        //                     error: 'Unauthorized'
        //                 });
        //                 return
        //         }
        //     }).catch((err) => {
        //         response.error(res,
        //             {
        //                 status: 401,
        //                 error: err
        //             });
        //     });
        });
    }
}

module.exports = middleware;