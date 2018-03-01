<?php
$text = "dog cat snack rabbit chicken duck fish pig cow goat";
	if(isset($_POST['idtest'])){
		if(isset($_POST['idtext']) && $_POST['idtext'] !== ''){
			$idtextval = $_POST['idtext'];
			echo "<div style='color:red;'>".$idtextval."</div>";
			echo "<br/>";
			echo str_ireplace($idtextval,"<font style='color:red;'>".$idtextval."</font>",$text);
		}
	}
?>