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
        if (this.responseText.split("|")[0]==0) {
          $("button#"+betu).css("backgroundColor","red")
          var hibak = this.responseText.split("|")[1]
          $("p#hibak").text("Hibák száma: "+hibak)
          $("#kep").attr("src", "kepek/"+hibak+".png")
        }
        else {
          var betuk = this.responseText.split("|")[1].split("_")
          vonalak=$("#szo").text().split("")
          for(i=0; i<betuk.length-1;i++) {
            vonalak[betuk[i]]=betu
          }
          $("#szo").html(vonalak)
          console.log(vonalak)
          $("button#"+betu).css("backgroundColor","green")

        }
      }
      xhr.send("betu="+betu);
    }
    </script>
  ';
 ?>
