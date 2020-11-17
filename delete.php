<?php
require_once( 'database.php' );

$id = $_GET['id'];

$statement = "DELETE from guestbook WHERE ID = '{$id}'";

if ( $db->query( $statement ) ) {
    $message = "Data has been DELETED.";
} else {
    $message = "Error: " . $statement . "<br>" . $db->error;
}

include('templates/action-result.php');
?>