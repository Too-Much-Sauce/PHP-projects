<html>
	<head>
		<title>Cookie Count</title>
	</head>
	<body>
<h1>Hello</h1>
	
<?php 

		if (!isset($_COOKIE['count']))
		{
				?> 
Welcome! This is the first time you have viewed this page. 
<?php 
				$cookie = 1;
				setcookie("count", $cookie);
		}
		else
		{
				$cookie = ++$_COOKIE['count'];
				setcookie("count", $cookie);
				if ($cookie == 5){
					echo "<h2>Hello</h2>";
				} elseif ($cookie == 10){
					echo "<h2>It's me</h2>";
				} elseif ($cookie == 15) {
					echo "<h2>I was wondering if after all these years you'd like to meet</h2>";
				} elseif ($cookie >= 20){
					unset($_COOKIE['count']);
					$cookie = 1;
					setcookie("count", $cookie);
				}
				?> 
Number of views <?= $_COOKIE['count'] ?>. 
<?php  } ?> 
	
	</body>
</html>