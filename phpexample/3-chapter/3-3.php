<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php各种输出的区别</title>
<head>
	<body>
		<?php 
			echo "3-3.php";
			echo "<br/>";
			print "3-3.php";
			echo "<br/>";
			printf("3-3.php");
			echo "<br/>";
			print_r("3-3.php");
			echo "<br/>";
		?>
		<?php
	$boy = "spcn";
	$girl = 'qm';
	$arr = array($boy,$girl);
	echo $boy.' '.$girl.' ';
	echo '<br>';
	print($boy);
	echo '<br>';
	printf('%s',$girl);
	echo '<br>';
	print_r($arr);
	echo "<br/>";
	echo $arr;
	echo "<br/>";
	print($arr);
?>
	</body>
</head>
</html>