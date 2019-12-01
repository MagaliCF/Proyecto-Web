<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	print(date("M d, Y H:i:s",time()));
	if(time()>20||time()<4)
	{
		echo "Buenas noches";
	}
	else{
		echo "Buenos dias";
	}

	 ?>
</body>
</html>
