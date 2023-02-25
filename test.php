<?php
require_once 'core/db.php';
$connection = db_connect();
$query = db_selectOne($connection,$_GET['id']);

?>

<img src="<?=$query[0]['image']?>">
