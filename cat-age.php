<!DOCTYPE html>
<html>
<head>
	<title>Cat Age-OOP Exercise</title>
	<link href="../css/styles.css" rel="stylesheet">
</head>

<body>
	<h1>You and Your Cat's Results</h1>
<?php

	// your code here
	include('inc-cat-object.php');
  
    $age = $_POST['age'];
  
    $yourCat = new Cat();
  
    $yourCat->setCatAge($age);
  
    if ($age>=1)
    {
      print("<p>Yes, you have a cat.  It's a dick who happens to be ".$yourCat->getCatAge()." years old.</p?");
    }
    else
      print("<p>Congratulations, you don't have a cat, and thus it is not a dick.</p>");
?>
</body>
</html>