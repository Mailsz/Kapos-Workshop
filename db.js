var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "akasztofa"
});

con.connect(function (err) {
    if (err) throw err;
    console.log("Connected!");
});