<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>获取当前访问者的计算机信息</title>
<head>
	<body>
		<?php
			echo 'iP:   '.$_SERVER['REMOTE_ADDR'];
			echo "</br>";
			echo "port:   ".$_SERVER['REMOTE_PORT'];
			echo "<br/>";
			//echo "hostname:   ".$_SERVER['REMOTE_HOST'];
			//echo "<br/>";
			echo ":   ".$_SERVER['SERVER_ADDR'];
			echo "<br/>";
			echo ":   ".$_SERVER['SERVER_PORT'];
			echo "<br/>";
			echo ":   ".$_SERVER['DOCUMENT_ROOT'];
			echo "<br/>";
			echo __FILE__;
			echo "<br/>";
			echo __LINE__;
			echo "<br/>";
			echo PHP_VERSION;
			echo "<br/>";
			echo PHP_OS;

		?>
	</body>
</head>
</html>