<?php
require_once('database.php');

$name = $db->real_escape_string( $_POST['name'] );
$comment = $db->real_escape_string( $_POST['comment'] );

$statement = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";


if ( $db->query( $statement ) ) {
    $message = "Data has been SAVED.";
} else {
    $message = "Error: " . $statement . "<br>" . $db->error;
}

include('templates/action-result.php');
?>