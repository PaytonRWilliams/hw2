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
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>


 </body>
</html>

<!DOCTYPE html>
<html>
<body>

<h1>My Second JavaScript</h1>

<p>JavaScript can change the content of an HTML element:</p>

<button type="button" onclick="myFunction()">Click Me!</button>

<p id="demo">This is a demonstration.</p>

<script>
function myFunction() { 
  document.getElementById("demo").innerHTML = "Hello JavaScript!";
}
</script>

</body>
</html>




<?php
include "view-footer.php";
?>
