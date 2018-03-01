<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>逗号分割省会</title>
<style type="text/css">
	input{width: 300px;height: 30px;}
</style>
<head>
	<body>
		<?php
		$country = "长沙，武汉，贵阳，南昌，广州，深圳，上海，北京，天津，哈尔滨";
		print_r(explode('，', $country)) ;
		echo "<br/>";
		foreach (explode('，', $country) as $key => $value) {
			echo $value;
			echo "<br/>";
		}
		?>
	</body>
</head>
</html>