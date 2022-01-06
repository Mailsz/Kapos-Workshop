<?php
  echo '
    <script>
    function button(id) {
      var betu = document.getElementById(id).innerHTML.toLowerCase()
      $("button#"+id).prop(\'disabled\', true);
      var xhr = new XMLHttpRequest();
      xhr.open(\'POST\',\'spBackend/betu.php\',true);
      xhr.setRequestHeader(\'Content-type\',\'application/x-www-form-urlencoded\');
      xhr.onload = function() {
        console.log(this)
        if(this.responseText>0) {
          $("#hibak").html("Hibak száma: "+this.responseText)
        }
        else if(this.responseText!="") {
          $("#szo").html(this.responseText)
        }
      }
      xhr.send("betu="+betu);
    }
    </script>
  ';
 ?>
