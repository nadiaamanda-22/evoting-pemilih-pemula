var mysql = require('mysql');

const conn = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'db_pemilih_pemula'
});

// conn.connect((err)=>{
//     if (err) {
//         throw err
//     }else{
//         console.log('benar');
//     }
// });

module.exports = conn;