<!DOCTYPE html>
<!--	Author: Kaitlyn Ruark
		Date:	2/27/19
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	// your code here
	include('inc-rectangle-object.php');
  
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];
  
    $longWall = new Rectangle();
    $shortWall = new Rectangle();
  
    $longWall->setX($height);
    $longWall->setY($length);
    $shortWall->setX($height);
    $shortWall->setY($width);
  
    $totalArea = (2 * $longWall->getArea()) + (2 * $shortWall->getArea());
	
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>