<?php
function db_connect() {
    $host = 'labitf13.mysql.database.azure.com';
    $username = 'Jutamas@labitf13';
    $password = 'DMJbvc45';
    $dbname = 'itflab';

    $conn = mysqli_connect( $host, $username, $password, $dbname );

    if ( mysqli_connect_errno( $conn ) ){
        die('Failed to connect to MySQL: ' . mysqli_connect_error() );
    }

    return $conn;
}

$db = db_connect();