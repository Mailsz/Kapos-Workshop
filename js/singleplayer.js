//Adatbazis csatlakozas
const db = require('../db.js');

console.log(db.con);

var express = require('express');
var session = require('express-session');
const {response} = require("express");
var app = express();
app.use(session({secret: 'ezatitok'}));
var session;
app.get('/', function (req, res) {
    session = req.session;
    response.send("hello");

    // agyfasz kerdojel
    //session.ido =
});
