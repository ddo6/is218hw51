<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ddo6';
    $username = 'ddo6';
    $password = 'VP1tk3lrA';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
