<?php 	
		

	 $data = array( 
		
      'Name' => $_POST['name'],


      'Gender' => $_POST['gender'],


      'Age' => $_POST['age'],


      'City' => $_POST['city'],

      'Mobile' => $_POST['mobile'],


      'Email' => $_POST['email'],

);
		
		$m=new MongoClient();
		$db=$m->tourister;
		

	$db->newmember->insert($data);

	  
	echo "welcome to tourister";
   
	 


      
   ?>