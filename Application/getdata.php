<?php

	//Connect Database
	require_once '../include/dbconnect.php';

	//Contains All Tags 
	$arrayOfTags = $_REQUEST['tags'];

	if (empty($arrayOfTags)) {
		die;
	}

	$queried = mysql_real_escape_string($arrayOfTags); // always escape

	

	$keys = explode(",",$queried); //Seperating Tags

	
	$fields = array('name','phone','address','email');

	//preparing SQL
	$sql = "SELECT * FROM `people` WHERE ";

	$i=0; //Initializing Counting Variable

	foreach($fields as $field){

	    if($i==0)
		{
			$sql.=" `$field` LIKE '%$keys[0]%'"; //For only One tag
		}
		else
		{
			$sql.=" OR `$field` LIKE '%$keys[0]%'"; //Appending SQL if more than one tags Encountered
		}

		$i++; // Incrementing Variable
	}
		
	$result = mysql_query($sql) or die(mysql_error());

	while ($data = mysql_fetch_row($result)) {
		$allresult[] = $data;
	}

	// Show Error if Result is Empty.

	if (empty($allresult)) {
		echo "<div class='notfound'>";
		echo "<center> * Not Found * </center>";
		echo "</div>";
		die;
	}

	$firstTag = $keys[0];
	unset($keys[0]); //Remove Searched Key i.e FirstOne Always

	foreach ($keys as $key) {
		
		$x=0; //Counter Vaiable
		
		foreach ($allresult as $eachResult) {

			$eachRow = implode(" ",$eachResult);

			if(strpos( strtolower($eachRow), strtolower($key))){
				// echo "Yes";
				// echo "</br>".$eachRow."</br></br>";
			} else {
				unset($allresult[$x]);
				// echo "No";
				// echo "</br>".$eachRow."</br></br>";
			}
			
			/**
			* LOGIC :: 1
			*
			* foreach ($eachResult as $keya) {if (strtolower($keya)==strtolower($key)) {}}
			*
			*/

			/**
			* LOGIC ::2
			*
			* $eachResult = array_map('strtolower', $eachResult);
			* $key = strtolower($key);
			* if(!array_search($key, $eachResult)){
			*	unset($allresult[$x]);
			* }
			*/



		$x++;
		}
	}


	array_unshift($keys , $firstTag);

	foreach ($allresult as $eachResult) {
		
		//Bolding Tags in Result 
		foreach ($keys as $search_string) {
			$eachResult = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $eachResult);		
		}

		$id 	= $eachResult[0];
		$name 	= $eachResult[1];
		$phone	= $eachResult[2];
		$email = $eachResult[3];
		$address= $eachResult[4];

		//Display Results

		//if (empty($address) === false || empty($phone) === false) { $seperator = ','; } else { $seperator = ''; }
		
		echo "<a href='view.php?id=".$id."'>";
		echo "<div class='search-item'>";
		echo "<h2>".$name."</h2>";
		echo "<span> ".$address." </span></br>";
		echo "<span> ".$phone." </span>";
		if (!empty($email)) {
			echo "<span></br>Mail :: ".$email." </span>";
		}
		echo "</div>";
		echo "</a>";
		

	}
?>