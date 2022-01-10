//Csatlakozas letrehozasa
var socket = io.connect('http://localhost:4000');

//Ertekek a html reszrol
var message = document.getElementById('message'),
      btn = document.getElementById('send'),
      output = document.getElementById('output');

//kuldes gombra reagalva
btn.addEventListener('click', function(){
  //kuldje ez az uzenetet
  socket.emit('chat', {
      message: message.value
  });
  //uritse ki az inut tartalmat
  message.value = "";
});

//Ha kap uzenetet akkor...
socket.on('chat', function(data){
    //A frontendre kiirashoz szukseges a resz
    output.innerHTML += '<p><strong>' + data.message + ': </strong></p>';
});
