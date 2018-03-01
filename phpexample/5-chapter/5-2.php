<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>身份证号验证</title>
<style type="text/css">
	input{width: 300px;height: 30px;}
</style>
<head>
	<body>
		<form action="#" method="post">
			<input type="text" name="idtext">
			<input type="submit" name="idtest">
		</form>
		<?php
			if(isset($_POST['idtest'])){
				if(isset($_POST['idtext']) && $_POST['idtext'] !== ''){
					$idtextval = $_POST['idtext'];
					if(is_numeric($idtextval)){
						if(strlen($idtextval) != 18){
							echo "您输入的身份证号长度不正确";
						}else{
							echo "您的身份证号是".$idtextval;
						}
					}else{
						echo "请您输入正确格式的身份证号";
					}
				}
			}
		 ?>
	</body>
</head>
</html>