<?php


	/** 
                User name : admu
                Password : new_pass
                MongoDB host : localhost
                MongoDB port : 27017
                Database : university
        */
        

        // Connecting to server
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
      
        
				
				
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){

try{
		$db = $c->tourister;
		$collection = $db->newuser;
		$cursor = $collection->find();
		foreach($cursor as $document){
			$data .= "<tr>";
			$data .= "<td>" . array($document["$_POST['check_list"]) . "</td>";
			
			$data .= "</tr>";
		}
		$data .= "</tbody>";
		$data .= "</table>";
		echo $data;
	
	}catch(MongoException $mongoException){
		print $mongoException;
		exit;
	}

}
}
}
?>

     
