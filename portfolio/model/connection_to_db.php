<?php
$dsnP = 'mysql:host=;dbname=portfolio_database';
$dsnPic = 'mysql:host=';
$dsnPro = 'mysql:host=';


$password = '';

function connectToDatabase($dsn)
{
    global $dsnPic;
    global $dsnPro;
    global $password;
    
    if($dsn==$dsnPic) {
        $username = '';
    }
    if($dsn==$dsnPro) {
        $username = '';
    }
    global $username;
    global $password;
    try {
        $connection= new PDO($dsn, $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    } catch (PDOException $e) {
        echo 'Connexion failed : ' . $e->getMessage();
        return null;
    }
    return $connection;
}

