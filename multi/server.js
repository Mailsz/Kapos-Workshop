var express = require('express');
var socket = require('socket.io');

var app = express();
var server = app.listen(4000, function (){
    console.log("listening on port 4000")
});

app.use(express.static('frontend'));


// socket setup
var io = socket(server);

io.on('connection', function (){
    console.log("sikeres socket csatlakozas", socket.id)
});