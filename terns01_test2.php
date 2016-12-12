<!DOCTYPE html>
<html>
<body>

	
	<?php 
		//----------------SINGLE TERN----------------------
	
		
		final class connectDB
		{
			public $userName = null;
			public $password = null;
			
			
			
			public static function initFunc($user, $pass)
			{
				static $conDB = NULL;
				if($conDB === NULL)
				{
					$conDB = new connectDB($user, $pass);
					
				}
				return $conDB;
			}
			
			private function __construct($user, $pass)
			{
				$this->userName = $user;
				$this->password = $pass;
			}
			
		}
		
		$conDB1 = connectDB::initFunc("mrmanhluc","ABC");
		
		
		echo $conDB1->userName;
		echo $conDB1->password;
		
		
	?>
	

</body>
</html>