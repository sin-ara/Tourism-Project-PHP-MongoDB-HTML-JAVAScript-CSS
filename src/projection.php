<?php
    $m = new MongoClient();
    $db = $m->selectDB('tourister');
    $collection = new MongoCollection($db, 'newuser');
    // Search criteria
    $query = array();
 
 
 
    $projection = array("_id"=>true, "Name"=>true, "Gender"=>true);
    $cursor = $collection->find($query, $projection);
    foreach ($cursor as $doc) {
        var_dump($doc);
    }
	
?>
