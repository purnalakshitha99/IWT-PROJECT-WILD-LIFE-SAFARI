<?php session_start(); ?>
<?php require_once 'connection.php';?>
<?php
//checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
}

if (isset($_GET['item_ID'])) {
    //getting the item information
    $item_ID = mysqli_real_escape_string($link, $_GET['item_ID']);

    //deleting the item
    $query = "DELETE FROM package WHERE id = {$item_ID} LIMIT 1";


    $result = mysqli_query($link, $query);
    if ($result) {
        //item deleted
        header('Location: retrive_packagemy.php?msg=item_deleted');
    } else {
        header('Location: retrive_packagemy.php?msg=delete_failed');
    }
} else {
    header('Location: retrive_packagemy.php');
}
?>