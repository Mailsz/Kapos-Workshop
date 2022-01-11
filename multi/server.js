var maxPlayers = 4;

// SOCKET.IO NAK AZ IMPORTALASA (sry caps)
var socket = require('socket.io');

//szerver oldali alkalmazasok felallitasa / konfiguracioja
const express = require("express")
var app = express();
var server = app.listen(4000);
var io = require('socket.io')(server, {
    cors: {
      origin: '*',
    }
});

app.use(express.static('public'));

//Ha uj kapcsolat jon letre
io.on('connection', (socket) => {

  //ha a jatekosok szama tobb mint a megengedett maximum utasitsa vissza a csatlakozast
  if(io.engine.clientsCount > maxPlayers) {
    socket.disconnect();
  }
  else {
    //Elkuldi a clientnek a csatlakozott client-ek szamat
    io.sockets.emit ('users', {count: io.engine.clientsCount});
  }

    //Kiirja a csatlakozott fel id-jet
    console.log(socket.id, 'csatlakozott');
    console.log(io.engine.clientsCount);

    //Adat kuldes kezelese
    socket.on('chat', function(data){
        console.log(data);
        io.sockets.emit('chat', data);
        io.send(io.engine.clientsCount);
    });
});
