<?php
    
    // Development Connection
    // $host = '127..0.1';
    $host = 'localhost';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    // dns - data source name
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo 'Hello DataBase';
    } catch(PDOException $e){
        // echo '<h1 class="text-danger">No Database Found</h1>';
        throw new PDOException($e->getMessage());
    }
    require_once 'crud.php';
    $crud = new crud($pdo);
?>