// on importe mysql
const mysql = require('mysql');


// on initialise la connection a la DB
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'api-nodejs'
});


// on établis la connection à la DB
connection.connect((error) => {
    if(error) return console.log(error.message);
    console.log("Connection reussie à la BDD");
});

module.exports = connection;