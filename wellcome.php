<!DOCTYPE html>
<html>
<body>

	
	<?php 
	
		if($_GET["name"]==Null)
		{
			echo "THIS IS POST</br>";
			echo "Welcome ".$POST["name"]. "</br>";
			echo "Your email address is : ".$_POST["email"];
		}
		else
		{
			echo "THIS IS GET";
			echo "Welcome ".$_GET["name"]. "</br>";
			echo "Your email address is : ".$_GET["email"];
		}
	?>
	

</body>
</html>