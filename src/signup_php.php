<?php
		$data = array('Name' => $_POST['uname'],
		
					 'ID' => $_POST['id'],
					
					'Gender' => $_POST['gender'],
					
					'Age' => $_POST['age'],
					
					'City' => $_POST['city'],
					
					'Mobile' => $_POST['mobile'],
					
					'Email' => $_POST['email'],
					
					
					'Password' => $_POST['psw'],
					'Password_repeat' => $_POST['psw_repeat']
		 );
		 
	 
		 if($_POST['psw']== $_POST['psw_repeat'])
		 {
		 
	$m=new MongoClient();
	$db=$m->tourister;
	$db->newuser->insert($data);
	

	echo" welcome to the world of tourister!";
	
		 }
		 else 
		 {
		
		 
		 }
		 
		 header("Location:sign.php");
?>