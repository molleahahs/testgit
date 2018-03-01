<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>list和each函数混用</title>
<head>
	<body>
		<?php
			$arr = array('au1' => 'b1', 'au2' =>'b2', 'au3' => 'b3', 'au4' => 'b4', 'au5' => 'b5');
			while (list($auname,$bname) = each($arr)) {
				echo $auname.'是'.$bname.'的作者';
				echo "<br/>";
			}
		?>
	</body>
</head>
</html>