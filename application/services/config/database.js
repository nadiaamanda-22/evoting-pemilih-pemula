require('dotenv').config();
const Sequelize = require('sequelize');

const sequelize = new Sequelize(
    'db_pemilih_pemula',
    'root',
    '',
    {
        host:'localhost',
        dialect:'mysql',
        timezone: '+07:00',
    }
);

sequelize
.authenticate()
.then(() => {
    console.log('Connection has been established successfully.');
}).catch(err => {
    console.log('Unable to connect to the database:',err);
});

module.exports = sequelize;