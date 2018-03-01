<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 20px;
	margin-top: 20px;
}
-->
</style>

<title>数字输入检测</title>
</head>
<body>
	<form method="post" action="#">
		<table>
			<tr>
				<td>请输入25位以下的数字</td>
				<td><input type="text" name="inputnum" /></td>
				<td><input type="submit" name="submitform"></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['submitform'])){
			if(isset($_POST['inputnum']) && $_POST['inputnum'] !== ''){
				$curnum = $_POST['inputnum'];
				if(is_numeric($curnum)){
					echo '您输入的数字为'.$curnum;
				}else{
					echo "请您输入正确的值";
				}
			}else{
				echo '不能为空';
			}
		}
	?>

</body>
</html>
