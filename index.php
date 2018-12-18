<html>
<head>
<title>Unit Converter</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body>
<div class="jumbotron jumbotron-fluid">
<h1 class="display-4">Unit Converter</h1>
</div>
<div class="container">
<form action="celius.php" method="POST">
<h1>Please enter celius temperature</h1>
<input type="number" name="cel" />
<button class="btn btn-primary">Submit!</button>
</form>
<form action="fahrenheit.php" method="post">
<h1>Please enter a Farenheit temperature to convert to celius</h1>
<input type="number" name="fahreneheit"/>
<button class="btn btn-primary">Convert</button>
</form>
</div>
</body>


</html>