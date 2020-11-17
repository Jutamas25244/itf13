<?php
require_once( 'database.php' );

$id = $db->real_escape_string( $_POST['id'] );
$name = $db->real_escape_string( $_POST['name'] );
$comment = $db->real_escape_string( $_POST['comment'] );

$statement = "UPDATE guestbook SET name = '{$name}', comment = '{$comment}' WHERE id = '{$id}'";

if ( $db->query( $statement ) ) {
    $message = "Data has been UPDATED.";
} else {
    $message = "Error: " . $statement . "<br>" . $db->error;
}

include('templates/action-result.php');
?>