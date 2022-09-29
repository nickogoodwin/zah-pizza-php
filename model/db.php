<?php
    $dsn = 'mysql:host=localhost;dbname=zah_pizza';
    $username = 'app';
    $password = 'Pa55word';                      

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/errors.php');
        exit();
    }
?>