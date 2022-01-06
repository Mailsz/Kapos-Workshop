// csatlakozas letrehozasa socket.io hoz
var socket = io.connect("http://localhost:4000");

var output = document.getElementById("output");
var button = document.getElementById("send");
var message = document.getElementById("message");

button.addEventListener('click', function () {
    socket.emit('message', {
        message: message.value
    });
});


socket.on('message', function (data) {
    io.socket.emit('message', data);
    output.innerHTML += '<p><strong>' + data.handle + '</strong>>' + data.message + '</p>';
});
