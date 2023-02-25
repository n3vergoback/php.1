<?php
require_once 'core/db.php';
$conn = db_connect();

$username = $_POST['name'];
$email = $_POST['email'];
$os = $_POST['os'];
$skills = array();
if (isset($_POST['php'])){
    $skills[] = 'php';
}
if (isset($_POST['mysql'])){
    $skills[] = 'mysql';
}
if (isset($_POST['js'])){
    $skills[] = 'js';
}
if (isset($_POST['git'])){
    $skills[] = 'git';
}


$skills = implode(', ', $skills);
$aboutys = $_POST['info'];
$sex = $_POST['sex'];
move_uploaded_file($_FILES['image']['tmp_name'], 'images/'. $_FILES['image']['name']);
$image = 'images/'. $_FILES['image']['name'];
//db_insert($conn, $username, $email, $os, $skills, $aboutys, $sex, $image);
header('Location: http://localhost/phpprojects/index.php');
?>
