$(".b").hide()
$(".c").hide()
$(".d").hide()


setTimeout(function() {
  $(".a").show(1000)
  $(".b").hide(1000)
  $(".c").hide(1000)
  $(".d").hide(1000)

},10000)
setTimeout(function() {
  $(".b").show(1000)
  $(".a").hide(1000)
  $(".c").hide(1000)
  $(".d").hide(1000)

},20000)
setTimeout(function() {
  $(".c").show(1000)
  $(".b").hide(1000)
  $(".a").hide(1000)
  $(".d").hide(1000)

},40000)
setTimeout(function() {
  $(".d").show(1000)
  $(".b").hide(1000)
  $(".a").hide(1000)
  $(".c").hide(1000)
},60000)


function pont(id) {
  for (var i = 1; i < 13; i++) {
    $(".p"+i).css("display","none")
    $("#p"+i).css("text-decoration","none")
  }
  $("."+id).css("display","block")
  $("#"+id).css("text-decoration","underline")
}
