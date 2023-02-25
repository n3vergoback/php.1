<?php
require_once 'core/config.php';

function db_connect()
{
    $connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    return $connection;
}

function db_select($conn)
{
    $query = mysqli_query($conn, 'SELECT * FROM user');
    $a = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $a[] = $row;
        }
    } else {
        echo 'Список пользователей пуст!';
    }
    return $a;
}
function db_insert($conn, $username, $email, $os, $skills, $aboutys, $sex, $image){
    $sql = "INSERT INTO user (username, email, os,skills, aboutys, sex, image) VALUES ('$username', '$email', '$os','$skills', '$aboutys', '$sex', '$image')";
    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        echo 'Возникла ошибка';
    }
    mysqli_close($conn);
}

function db_selectOne($conn, $id)
{
    $query = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
    $a = array();
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $a[] = $row;
        }
    } else {
        echo 'Список пользователей пуст!';
    }
    return $a;
}
