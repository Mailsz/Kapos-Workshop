for (var i = 0; i < szo.length; i++) {
  $("#szo").append("_")
}
function button(id) {
  var betu = document.getElementById(id).textContent.toLowerCase()
  var xhr = new XMLHttpRequest();
  xhr.open('POST','spBackend/betu.php',true);
  xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
  xhr.onload = function() {
    if (this.responseText==0) {
      $("button#"+betu).css("backgroundColor","red")
    }
  }
  xhr.send("betu="+betu);
}
