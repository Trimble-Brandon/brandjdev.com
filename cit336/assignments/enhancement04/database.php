<?php
    $dsn = 'mysql:host=localhost;dbname=brandjde_guitar1';
    $username = 'brandjde_brand';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>