<?php
  echo '
    <script>
    szo = "'.$_SESSION['spSzo'].'";
    for (var i = 0; i < szo.length; i++) {
        $(\'#szo\').append("_");
    }

    function button(id) {
      var betu = document.getElementById(id).textContent.toLowerCase()
      $("button#"+id).prop(\'disabled\', true);
      var xhr = new XMLHttpRequest();
      xhr.open(\'POST\',\'spBackend/betu.php\',true);
      xhr.setRequestHeader(\'Content-type\',\'application/x-www-form-urlencoded\');
      xhr.onload = function() {
        console.log(this.responseText)
        if (this.responseText.split("|")[0]==0) {
          $("button#"+betu).css("backgroundColor","red")
          var hibak = this.responseText.split("|")[1]
          $("p#hibak").text("Hibák száma: "+hibak)
          $("#kep").attr("src", "kepek/"+hibak+".png")
        }
        else {
          $("button#"+betu).css("backgroundColor","green")
        }
      }
      xhr.send("betu="+betu);
    }
    </script>
  ';
 ?>
