<!DOCTYPE html>
<html>
<head>
	<title>Cat Name-OOP Exercise</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
	<h1>You have a cat.</h1>
<?php

	// your code here
	include('inc-cat-object.php');
  
    $name = $_POST['name'];
  
    $yourCat = new Cat();
  
    $yourCat->setCatName($name);

	print("<p>Congratulations, you have a furry demon named ".$yourCat->getCatName().".</p>");
?>
</body>
</html>