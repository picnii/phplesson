<?php
	//Tip#1 echo
	echo "sompop";
	echo "<br/>";
	echo 5;
?>
<br/>
<?php
	//Tip#2 variable
	$grade = 7;
	echo $grade;
	echo "<br/>";
	$grade = $grade * 10;
	echo $grade;
	echo "<br/>";
	$grade = "A";
	echo $grade;
	echo "<br/>";
	echo "Hey my grade is {$grade}";
	echo "<br/>";
	//#Tip 3 . = + string
	echo "Hey my grade is"."$grade";

	//#Tip 4 if"
	if(true)
		echo "yess";
	else
		echo "none";
	echo "<br/>";
	if($grade == "A")
	{
		echo "Good job well done";
	}
	else if($grade =='B')
		echo "OK";

	//#tip 5 loop
	echo "<h2>While</h2>";
	$init = 10;
	while($init > 0)
	{
		echo "{$init}<br/>";
		$init--;
	}
	echo "<h2>For</h2>";
	for($init = 0; $init < 10; $init++)
	{
		echo "{$init}<br/>";
	}

	//#tip 6 array
	$arr = array();
	$arr[0] =  5;
	$arr[1] ="yes";
	$arr[2] = false;
	$arr[3] = 123;
	$arr[4] = 123213213;

	print_r($arr);	
	echo "<br/>";
	for($i =0; $i < count($arr); $i++)
		echo $arr[$i].",";

	echo "<br/>";

	$arr2 = array('gai', "jing", 555);
	print_r($arr2);
	echo "<br/>";

	$arr = array();
	$arr["note"] =  "junfuck";
	$arr["yom"] ="lol";
	$arr[2] = 559;

	print_r($arr);$requestName = "yom";
	echo $arr[$requestName];
	echo "<br/>";
	echo "<br/>";

	

	$arr = array(
		"note" => "junfuck",
		"yom" => 'LOL',
		2 => 559
	);
	print_r($arr);
	echo "<br/>";

	$arr = array(
		"note" => array(
			"name"=>"NoNote",
			"lastName"=>"kak"
		),
		"yom" => array(
			"name"=>"NoNote",
			"lastName"=>"kak"
		),
		2 => 559
	);

	$requestName = "note";
	$name = $arr[$requestName]['name'];
	$lastname = $arr[$requestName]['lastName'];	
	echo "Hello {$name} and your lastname is {$lastname}";
	echo "<br/>";

	#tip7 function
	function printCool()
	{
		echo "printCool";
	}

	function calPlus($a, $b)
	{
		$sum = $a + $b;
		return $sum;
	}

	function printYow($str)
	{
		echo $str." yo!";
	}

	printCool();
	printYow(calPlus(5,9) );

?>
