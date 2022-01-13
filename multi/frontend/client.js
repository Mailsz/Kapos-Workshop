//Csatlakozas letrehozasa
var socket = io.connect('http://localhost:4000');

//Ertekek a html reszrol
var message = document.getElementById('message'),
      btn = document.getElementById('send'),
      output = document.getElementById('output');
      players = document.getElementById('players');
      user = document.getElementById('user');
      roomid = document.getElementById('szobaId');
      sendId = document.getElementById('sendId');

sendId.addEventListener('click', function() {
  console.log(roomid.value);
    socket.emit('roomID', {
      message: roomid.value
    });
    roomid.value = '';
});

//Kuldes gombra reagalva
btn.addEventListener('click', function(){
  //Kuldje ez az uzenetet
  socket.emit('chat', {
      message: message.value
  });
  //Uritse ki az input tartalmat
  message.value = '';
});

//Ha kap uzenetet akkor...
socket.on('chat', function(data){
    //A frontendre kiirashoz szukseges a resz
    output.innerHTML += '<p id="uzenet">' + data.message + '</p>';
});

//Csatlakozott jatekosok szamat fogado fuggveny
socket.on('users', function(data){
    console.log(data.count);
    //Kiirja a csatlakozott jatekosok szamat
    players.innerHTML = 'csatlakozott jatekosok (max 4): ' + data.count;
    user.innerHTML = 'Felhasznalo: ' + socket.id;
});
