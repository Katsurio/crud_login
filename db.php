<?php
//$conn = mysqli_connect('localhost', 'root', 'root', 'login_app');
//
//if (!$conn) {
//    die("Database connection failed");
//}
//
//
//// New PDO connecting
//try {
//    $pdo = new PDO('mysql:host=localhost; dbname=login_app; charset=utf8', 'root', 'root');
//    $output = 'DB Connection established.';
//    echo $output;
//}
//catch (PDOException $e) {
//    $output = 'Unable to connect to the db server: ' .
//        $e->getMessage() . ' in ' .
//        $e->getFile() . ':' . $e->getLine();
//    echo $output;
//}

try {
    $pdo = new PDO('mysql:host=dreamhostdb.greenstreetapps.com; dbname=gsatechtest; charset=utf8', 'gsatechtest', 'gr33nstr33t');
    $output = 'DB Connection established.';
    echo $output;
}
catch (PDOException $e) {
    $output = 'Unable to connect to the db server: ' .
        $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    echo $output;
}