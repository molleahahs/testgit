<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文件名</title>
<head>
	<body>
		<?php
$mysrr = array('onearr' => array('oneo','onet','oneth','onef','onefi'),
	'twoarr' => array('twoo','twot','twoth','twof','twofi'));
foreach ($mysrr as $key => $value) {
	echo $key.'--';
	echo $value;//echo输出数组就是数组要循环
	foreach ($value as $key2 => $value2) {
		echo $value2.'     ';
		echo $key2.'     ';
		# code...
	}
	echo "<br/>";
}
//$arr = array('webname' => array('编程词典','编程110'),'weburl' => array('www.mrbccd.com','www.bc110.com'));
		?>
	</body>
</head>
</html>