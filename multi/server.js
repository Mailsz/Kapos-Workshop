// SOCKET.IO NAK AZ IMPORTALASA (sry caps)
var socket = require('socket.io');

//szerver oldali alkalmazasok felallitasa
const express = require("express")
var app = express();
var server = app.listen(4000);
var io = require('socket.io')(server, {
    cors: {
      origin: '*',
    }
});

// Static files
app.use(express.static('public'));

//Ha uj kapcsolat jon letre

io.on('connection', (socket) => {
    //Kiirja a csatlakozott fel id-jet
    console.log(socket.id, 'csatlakozott');

    //Adat kuldes kezelese
    socket.on('chat', function(data){
        console.log(data);
        io.sockets.emit('chat', data);
    });

});
