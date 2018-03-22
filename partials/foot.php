<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> -->
<script type="text/javascript" src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script type="text/javascript" src="/js/matchHeight-min.js"></script>
<script type="text/javascript" src="/js/tether.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/scrollmagic/ScrollMagic.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>     
<script>
var ajax = new XMLHttpRequest();
ajax.open("GET", "/svg/symbol-defs.svg", true);
ajax.send();
ajax.onload = function(e) {
  var div = document.createElement("div");
  div.innerHTML = ajax.responseText;
  document.body.insertBefore(div, document.body.childNodes[0]);
}
// $.preloadImages = function() {
//   for (var i = 0; i < arguments.length; i++) {
//     $("<img />").attr("src", arguments[i]);
//   }
// }

// $.preloadImages("img/faculty.jpg","img/meet.jpg","img/orlando.jpg","img/stock1.jpg","img/stock2.jpg","img/stock3.jpg");
</script>