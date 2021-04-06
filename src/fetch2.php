<?php
$m = new Mongoclient();
$m->connect();
$db = $m->tourister;
$collection = $db->tourister;
$cursor = $collection->find();
foreach ($cursor as $obj) {
    echo $obj["title"] . "\n";
}
	?>