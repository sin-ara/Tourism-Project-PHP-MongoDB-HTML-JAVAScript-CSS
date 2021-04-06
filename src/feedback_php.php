<?php
		$data = array('Name' => $_POST['name'],
					'Email' => $_POST['email'],
					'Rating' => $_POST['rating'],
					'Message'=> $_POST['message']
		 );
	$m=new MongoClient();
	$db=$m->tourister;
	$db->feedback->insert($data);
	echo "Thanks for your valuable feedback ! .... We are glad to serve you ! ";
?>