<?php
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'users');

function pre($arr): void
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

