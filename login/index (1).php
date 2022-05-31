<!DOCTYPE html>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		//header ('Location: main/index.php');
	}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Start</title>
    <link rel="stylesheet" href="./intro/SFAS.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <div class="intro">
      <h1 class="logo-header">
      <span class="logo">Wel</span><span class="logo">come</span>
    </h1>
    </div>
<script src="./intro/SFAS.js" charset="utf-8"></script>


<!-- enter page -->
<img src="./intro/1638236468903.gif">
<form class="e-form" action="./login/loginpage.php">


<div >
  <input  class="enter" type="submit" name="" value="Enter">
</div>
</form>
  </body>
</html>
