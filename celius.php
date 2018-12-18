<html>
<head>
<title>Celius Converted</title>
</head>
<body>
<?php
$userInput = $_POST["cel"];
?>
Here is the number you entered <?php echo $_POST["cel"]?>
<br/>
<p>Here it is converted to Fahrenheit <?php echo ($userInput * 1.8 + 32)?></p>

<form action="index.php" action="post">

<p> Click Here to go back to main menu</p>

<button>Click here!</button>

</form>
</body>
</html>