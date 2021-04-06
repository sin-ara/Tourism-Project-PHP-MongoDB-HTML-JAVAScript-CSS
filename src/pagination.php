<?php
$mongodb    = new Mongoclient();
$database   = $mongodb->tourister;
$collection = $database->newuser;
$page  = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = $_POST['fix'];
$skip  = ($page - 1) * $limit;
$next  = ($page + 1);
$prev  = ($page - 1);
$sort  = array('createdAt' => -1);
$cursor = $collection->find()->skip($skip)->limit($limit)->sort($sort);
foreach ($cursor as $r) {
    echo sprintf('<p>name is %s. age is  %s. gender %s. </p>', $r['Name'], $r['Age'], $r['Gender']);
}
$total= $cursor->count();
if($page > 1){
    echo '<a href="?page=' . $prev . '">Previous</a>';
    if($page * $limit < $total) {
        echo ' <a href="?page=' . $next . '">Next</a>';
    }
} else {
    if($page * $limit < $total) {
        echo ' <a href="?page=' . $next . '">Next</a>';
    }
}
$mongodb->close();
?>