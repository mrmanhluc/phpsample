<!DOCTYPE html>
<html>
<body>

	
	<?php 
		//----------------SINGLE TERN----------------------
	
		static $conDB = null;
		
		final class connectDB
		{
			function initFunc()
			{
				GLOBAL $conDB;
				
				if($conDB === null)
				{
					$conDB = 1;
				}
				else	
				{
					$conDB++;
				}
				return $conDB;
			}
		}
		
		$temp = connectDB::initFunc();
		echo $temp;
		$temp = connectDB::initFunc();
		echo $temp;
		$temp = connectDB::initFunc();
		echo $temp;
		
		
	?>
	

</body>
</html>