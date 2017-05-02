<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	$x = 5 + 6;
	$text1 = "<br>this is sample var";

	echo "<br>$x" .$text1. "!";
	?>

<?php 
	function myfunction() {  
		static $x = 0;
		echo $x;
		$x++;
	}
	echo "<br>";
	myfunction();
	echo "<br>";
	myfunction();
	echo "<br>";
	myfunction();
	echo "<br>";
 # this is single line comment in php 
/* this milti line comment */
#this is for test request


$a = 115;
$b = 30;

if ($a == 15) {
	print "<br>this is right answer!!!";
}
else{
	print "this is wrong answer!!!";
}

?>

</body>
</html>
