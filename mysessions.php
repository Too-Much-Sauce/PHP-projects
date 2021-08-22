<?php

	if (isset($_POST['submit'])) {
      session_start();

		$_SESSION["HolidayLights"] = $_POST['HolidayLights'];
		$_SESSION["Wreaths"] = $_POST['Wreaths'];
		$_SESSION["Garlands"] = $_POST['Garlands'];
		$_SESSION["ChristmasTrees"] = $_POST['ChristmasTrees'];
		$_SESSION["Dreidels"] = $_POST['Dreidels'];
		$_SESSION["Stockings"] = $_POST['Stockings'];
    header("Location:Script.php");
    
	

}
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Holiday Shopping</title>
	</head>
	<body>
<h1>Holiday Items</h1>
	<form action =" " method = 'post'>
	<label for="Holiday Lights"><input type="text" name="HolidayLights">Holiday Lights</label> <br>
	<label for="Wreaths"><input type="text" name="Wreaths">Wreaths</label><br>
	<label for="Garlands"><input type="text" name="Garlands">Garlands</label><br>
	<label for="Christmas Trees"><input type="text" name="ChristmasTrees">Christmas Trees</label><br>
	<label for="Dreidels"><input type="text" name="Dreidels">Dreidels</label><br>
	<label for="Stockings"><input type="text" name="Stockings">Stockings</label><br>
	<input type="submit" name="submit" value="submit">
	</form>
  </body>
</html>
