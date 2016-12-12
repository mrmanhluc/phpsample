<!DOCTYPE html>
<html>
<body>

	
	<?php 
		//----------------SINGLE TERN----------------------
		//Y tuong : 
		//1. Dat ham construct private
		//2. Tao Instance co chua bien static.
		//Bien static kiem tra xem doi tuong nay da duoc khoi tao bao gio chua
		// Neu chua khoi tao thi khoi tao, neu khoi tao roi thi thoi
		
		
		final class UserFactory
		{
			public $temp = null;
			
			
			public static function Instance($name)
			{
				static $inst = null;
				if ($inst === null) 
				{
					$inst = new UserFactory($name);
				}
				return $inst;
			}
			
			
			private function __construct($name)
			{
				$this->temp = $name;
			}
			
		
		}
		
		$fact = UserFactory::Instance("Toi la nam");
		$fact1 = UserFactory::Instance("Toi la luc");
		
		echo $fact->temp;
		echo "</br>";
		echo $fact1->temp;
		
		
	?>
	

</body>
</html>