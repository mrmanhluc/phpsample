<!DOCTYPE html>
<html>
<body>

	<?php
		class dbConnect
		{
			
			private $userName;
			private $userPass;
			
			private function __construct($user,$pass)
			{
				$this->userName = $user;
				$this->userPass = $pass;				
			}
						
			public static function initDbConnect($user,$pass)
			{
				static $db = null;
				if($db===null)
				{
					$db = new dbConnect($user,$pass);
				}
				return $db;
			}
			
			public function cnnStr()
			{
				echo "</br>";
				echo "Connect string User is: ".$this->userName." and Pass is :".$this->userPass;
			}
			
		}		
		
		$cnn = dbConnect::initDbConnect("user","pass");
		$cnn->cnnStr();
		
		$cnn = dbConnect::initDbConnect("1","2");
		$cnn->cnnStr();
		
		$cnn = dbConnect::initDbConnect("3","4");
		$cnn->cnnStr();
		
	?>

</body>
</html>