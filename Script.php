<?php

	 session_start();

	$lights = $_SESSION['HolidayLights'];
	$wreaths = $_SESSION['Wreaths'];
	$garlands = $_SESSION["Garlands"];
	$trees =  $_SESSION["ChristmasTrees"];
	$dreidels = $_SESSION["Dreidels"];
	$stocking = $_SESSION["Stockings"];
  
	 
	 echo 'Holiday Lights: '.$lights. "</br>";
		echo 'Wreaths: '.$wreaths. "</br>";
		echo 'Garlands: '.$garlands. "</br>";
		echo 'Christmas Trees: '.$trees. "</br>";
		echo 'Dreidels: ' .$dreidels. "</br>";
		echo 'Stockings: ' .$stocking. "</br>";
	 echo "</br><a href='CheckOut.php' >Check Out</a>";

?>