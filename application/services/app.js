require('dotenv').config();
const appServer = require('express');
const app = appServer();
const port = process.env.PORT || 3000;
const route = require('./config/routes');
const bodyParser = require('body-parser');
const fileupload = require('express-fileupload');
const path = require('path');
const middleware = require('./config/middleware');
const userAgent = require('express-useragent');

app.use(userAgent.express());
//app_middleware
console.log(app)
middleware.app(app);

app.use(fileupload());
app.use(appServer.static(path.join(__dirname, 'public')));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

//app router
route(app);

app.listen(port, () => {
    console.log('Staring Restful API on port ' + port);
});
