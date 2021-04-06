<?php



       $c = new MongoClient();
				$db=$c->tourister;
        
        

	$data  = "<table style='border:1px solid red;";
	$data .= "border-collapse:collapse' border='1px'>";
	$data .= "<thead>";
	$data .= "<tr>";
	$data .= "<th>Name</th>";
	$data .= "<th>Age</th>";
	$data .= "<th>Gender</th>";
	$data .= "<th>City</th>";
	$data .= "</tr>";
	$data .= "</thead>";
	$data .= "<tbody>";

	try{
		$db = $c->tourister;
		$collection = $db->newuser;
		$cursor = $collection->find();
		foreach($cursor as $document){
			$data .= "<tr>";
			$data .= "<td>" . $document["Name"] . "</td>";
			$data .= "<td>" . $document["Age"]."</td>";
			$data .= "<td>" . $document["Gender"]."</td>";
			$data .= "<td>" . $document["City"]."</td>";
			$data .= "</tr>";
		}
		$data .= "</tbody>";
		$data .= "</table>";
		echo $data;
	
	}catch(MongoException $mongoException){
		print $mongoException;
		exit;
	}
	
