<html>
<head>Converted Far</head>
<body>
<?php 
 $userInput = $_POST["fahreneheit"];
?>
<p>This is what you entered in <?php echo $userInput; ?> </p>
<br/>
<p> This is the converted value  <?php echo (($userInput/1.8) - 32); ?> </p>

<form method="post" action ="index.php">
<p>Back to main Page</p>
<button>Click me!</button>
</form>

</body>
</html>