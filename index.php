<?php

$pageTitle="Home";
include "view-header.php";
?>
<h1>Home</h1>




<!DOCTYPE html>
<html>
<body>

<h1>My First JavaScript</h1>

<button type="button"
onclick="document.getElementById('demo1').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo1"></p>

</body>
</html> 









<!DOCTYPE html>
<html>
<body>

<h1>My Second JavaScript</h1>

<p>JavaScript can change the content of an HTML element:</p>

<button type="button" onclick="myFunction1()">Click Me!</button>

<p id="demo">This is a demonstration.</p>

<script>
function myFunction1() { 
  document.getElementById("demo").innerHTML = "Hello JavaScript!";
}
</script>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<h1>My Third JavaScript</h1>

<p id="demo2">JavaScript can change the style of an HTML element.</p>

<script>
function myFunction() {
  document.getElementById("demo2").style.fontSize = "25px"; 
  document.getElementById("demo2").style.color = "red";
  document.getElementById("demo2").style.backgroundColor = "yellow";        
}
</script>

<button type="button" onclick="myFunction()">Click Me!</button>

</body>
</html>







<!DOCTYPE html>
<html>
<body>

<h1>My Fourth JavaScript</h1>
<p>Here, a JavaScript changes the value of the src (source) attribute of an image.</p>

<script>
function light(sw) {
  var pic;
  if (sw == 0) {
    pic = "pic_bulboff.gif"
  } else {
    pic = "pic_bulbon.gif"
  }
  document.getElementById('myImage').src = pic;
}
</script>

<img id="myImage" src="pic_bulboff.gif" width="100" height="180">

<p>
<button type="button" onclick="light(1)">Light On</button>
<button type="button" onclick="light(0)">Light Off</button>
</p>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<p id="demo5"></p>

<script>
document.getElementById("demo5").innerHTML = "Hello JavaScript!";
</script>

<noscript>Sorry, your browser does not support JavaScript!</noscript>

<p>A browser without support for JavaScript will show the text written inside the noscript element.</p>
 
</body>
</html>








<?php
include "view-footer.php";
?>
