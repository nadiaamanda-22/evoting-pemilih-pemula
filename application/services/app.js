require('dotenv').config();
const express = require('express');
const app = express();
const routes = require('./config/routes');
const middleware = require('./config/middleware');
const bodyParser = require('body-parser');
const port = process.env.PORT || 3000;

// app.use(userAgent.express());
//app_middleware
// console.log(app)
middleware.app(app);

app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

routes(app);
app.listen(port, () => {
    console.log('Staring Restful API on port ' + port);
});
