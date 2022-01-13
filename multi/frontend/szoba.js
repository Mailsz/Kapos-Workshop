var socket = io.connect('http://localhost:4000');

var idInput = document.getElementById('szobaId');
    btn = document.getElementById('send');

btn.addEventListener('click', function(){
    console.log(id);
    var id = idInput.value;
    socket.emit('szobaid', {
        message: id;
    });
});
