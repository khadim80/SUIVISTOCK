<?php
function getConnection()
{
   $host = 'localhost';
    $mysqluser = 'root';
    $mysqlpassword = '';
    $dbname = 'suivistock';
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $db = new PDO($dsn, $mysqluser, $mysqlpassword,$pdo_options);
    } catch (\Throwable $th) {
        throw $th;
    }
    return $db;
}
