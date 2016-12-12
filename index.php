<!DOCTYPE html>
<html>
<body>
<?php
	
	$x = 5;
	$y = 6;
	
	$txt = "Hello world";
	echo "First program : ".$txt."";
	
	function firstFunction()
	{
	
		
		$GLOBALS['x'] = $GLOBALS['x']+$GLOBALS['y'] ;
		static $z = 1;
		echo $z;
		$z++;
		
	}
	
	firstFunction();
	firstFunction();
	echo $x;
	
	print "<h5> XIN CHAO </h5></br></br>";
	echo "</br>";
	echo "<h3> TIM HIEU VE CLASS </h3></br>";
	
	echo "</br>";
	var_dump($x);
	
	
	// ----------STRING FUNCTION-------------------
	//---------------------------------------------
	echo "</br>";
	$strTest = "ASDIJSA DISJAI";
	echo strlen($strTest);
	
	echo "</br>";
	echo str_word_count($strTest);
	
	//Đao nguoc chuoi
	echo "</br>";
	echo strrev($strTest);
	
	//Tim kiem vi tri chuoi ki tu
	echo "</br>";
	echo strpos("Xin Chao","Chao");

	//Thay the chuoi
	echo "</br>";
	echo str_replace("Trao", "Chao", "Xin Trao");
	
	// ----------IF THEN ELSE-------------------
	//------------------------------------------
	echo "</br>";
	
	$t =5;
	if($t == 5)
	{
		echo "OKE";
	}
	else
	{	
		echo "NOT OKE";
	}
	
	// ----------SWITCH CASE DEFAULT----------
	//------------------------------------------
	
	$color = "red";
	switch ($color)
	{
	case "red":
		echo "Red";
		break;
		
	case "Black":
		echo "black";
		break;
	default:	
		echo "Not know";
	}
	
	// ---------- LOOP---------------------
	//-------------------------------------
	
	//-----DO------	
	$i = 1;
	echo "</br>WHILE LoOP : </br>";
	while($i<10)
	{
		echo $i;
		$i++;
	}

	//-----DO WHILE------	
	echo "</br>DO WHILE LOOP : </br>";
	$j = 1;
	do
	{
		echo $j;
		$j++;
	}while($j<10);
	
	
	//-----FOR------
	echo "</br>DO FOR LOOP : </br>";
	for($t=1;$t<10;$t++)
	{
		echo $t;
	}
	
	//-----FOREACH-------
	echo "</br>DO FOREACH : </br>";
	$color = array("Green","Blue","Black","Red");
	
	foreach($color as $co)
	{
		echo "$co </br>";
	}
	
	// ---------- FUNCTION-----------------
	//-------------------------------------
	
	function testFunc()
	{
		echo "</br>Second function";
	}
	
	
	function testFunc1($para1)
	{
		echo "</br>Hello $para1";
	}
	
	function testFunc2($para1=4)
	{
		echo "</br>$para1";
	}
	testFunc();
	
	testFunc1("Manh Luc");
	
	testFunc2(5);
	
	// ---------- ARRAY-----------------
	//----------------------------------
	$student = array("Kiet","Tam","Luc");
	echo "</br> $student[0]  , $student[1], $student[2]";
	echo "</br>Member : ".count($student);
	
	//Loop in array
	for($z=0;$z<count($student);$z++)
		echo "</br> $student[$z]";
	
	$age = array("Kiet"=>13, "Tam"=>15);
	
	echo "</br>";
	echo "</br>";
	
	
	
	function show_array($arr)
	{
		foreach($arr as $ar=>$ar_age)
		{
			echo "</br>";
			echo "Name : $ar Age : $ar_age";
		}
	}
	
	show_array($age);
	
	echo "</br>";
	echo "</br>";
	
	ksort($age);
	show_array($age);	
	
	// ---------- GLOBALS---------------
	//----------------------------------
	echo "</br>SUPER GLOBAL</br>";
	
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	
	
?>

</body>
</html>