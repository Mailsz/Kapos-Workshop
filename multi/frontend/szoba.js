var idInput = document.getElementById('szobaId');
    btn = document.getElementById('send');
var id = idInput.value;
btn.addEventListener('click', function(){
    console.log(id);
});
export { id };
