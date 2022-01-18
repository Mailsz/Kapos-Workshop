$(".b").hide()
$(".c").hide()
$(".d").hide()


setTimeout(function() {
  $(".a").show()
  $(".b").hide()
  $(".c").hide()
  $(".d").hide()

},5000)
setTimeout(function() {
  $(".b").show()
  $(".a").hide()
  $(".c").hide()
  $(".d").hide()

},10000)
setTimeout(function() {
  $(".c").show()
  $(".b").hide()
  $(".a").hide()
  $(".d").hide()

},15000)
setTimeout(function() {
  $(".d").show()
  $(".b").hide()
  $(".a").hide()
  $(".c").hide()
},20000)
