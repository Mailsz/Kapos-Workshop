<?php
  echo '
    <script>
    function button(id) {
      var betu = document.getElementById(id).textContent.toLowerCase()
      $("button#"+id).prop(\'disabled\', true);
      var xhr = new XMLHttpRequest();
      xhr.open(\'POST\',\'spBackend/betu.php\',true);
      xhr.setRequestHeader(\'Content-type\',\'application/x-www-form-urlencoded\');
      xhr.onload = function() {
        if(this.responseText>-1) {
          $("#hibak").html("Hibak száma: "+this.responseText)
        }
        else {
          $("#szo").html(this.responseText)
        }
      }
      xhr.send("betu="+betu);
    }
    </script>
  ';
 ?>
