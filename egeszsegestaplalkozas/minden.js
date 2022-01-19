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
