<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		div{
			width: 100px;
			height: 150px;
		}
	</style>
</head>
<body>
<?php
    function a (){
    $colors = array("#000000","#66ccff","#ff0000");
    foreach($colors as $value){
        echo "<div style='background:$value'></div>";
        }
    }
    a();
?>
</body>
</html>