<!DOCTYPE html>
<html>
<body>

	
	<?php 
		//----------------CLASS----------------------
		class human
		{
			var $name;
			var $age;
			
			function showInfo()
			{
				echo "</br> Name : $this->name , Age : $this->age";
			}
		}
		
		class student extends human
		{
			var $mark;
			
			function ketqua()
			{
				
				$this->showInfo();
				
				parent::showInfo();
				
				echo "</br> Ket qua : ";
				
				switch($this->mark)
				{
					case 6: 
						echo "Nomal";
						break;
					case 8 : 
						echo "Good";
						break;
					default:
						echo "Bad";
				}	
			}
		}
		
		
		
		$sv1 = new student();
		$sv1->name = "Kiet";
		$sv1->age = 24;
		$sv1->mark = 6;
		
		//$sv1->showInfo();
		$sv1->ketqua();
		
		
	?>
	

</body>
</html>