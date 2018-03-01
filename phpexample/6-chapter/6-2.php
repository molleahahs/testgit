<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>邮箱地址验证</title>
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
				if(isset($_POST['idtext']) && trim($_POST['idtext']) !== ''){
					$idtextval = $_POST['idtext'];
					$preg = '/.+\@.+\.com/';
					$re = preg_match($preg,$idtextval,$result);
					if($re !== 0){
						echo "您输入的邮箱地址为".$result[0];
					}else{
						echo "您输入的邮箱格式不正确";
					}
				}
			}
		?>
	</body>
</head>
</html>