<?php session_start(); ?>
<?php require_once 'connection.php'; ?>
<?php
//checking if a user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
}

if (isset($_GET['user_id'])) {
    echo $_GET['user_id'];
    //getting the item information
    $user_id = mysqli_real_escape_string($link, $_GET['user_id']);

    //deleting the item
    $query = "DELETE FROM user WHERE id = {$user_id} LIMIT 1";


    $result = mysqli_query($link, $query);
    if ($result) {
        //item deleted
        $_SESSION = array();


        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }

        session_destroy();
        header('Location: safari_homepage.php?msg=user_deleted');
    } else {
        header('Location: my_profile_safari_owner.php?msg=delete_failed');
    }
} else {

    // header('Location: retrive_packagemy.php');

}
?>