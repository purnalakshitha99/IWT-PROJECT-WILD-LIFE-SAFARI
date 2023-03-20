<?php session_start(); ?>
<?php require_once '../Php/connection.php';?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('location: package_insert.php');
} ?>
<?php

$errors = array();
$item_ID = '';
$name = '';
$duration = '';
$location = '';
$price = '';


if (isset($_GET['item_ID'])) {
    $item_ID = mysqli_real_escape_string($link, $_GET['item_ID']);
    $query = "SELECT * FROM package WHERE id = {$item_ID} LIMIT 1";

    $result_set = mysqli_query($link, $query);


    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $result = mysqli_fetch_assoc($result_set);
            $name = $result['name'];
            $location = $result['location'];
            $duration = $result['duration'];
        } else {
            header('Location:users.php?err=user_not_found');
        }
    } else {
        //query successful
        header('Location:users.php?err=query_failed');
    }
}



if (isset($_POST['submit'])) {
    $item_ID = $_POST['item_ID'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];

    // $req_fields = array('item_ID','name','location','duration');
    // $errors = array_merge($errors,check_req_fields($req_fields));

    // if(!is_name($_POST['name']))
    // {
    //     $errors[]="name is invalid";

    // }
    $query = "UPDATE package SET name = '{$name}', location = '{$location}' , duration = '{$duration}' , price = '{$price}'  WHERE id = {$item_ID} LIMIT 1";

    $result = mysqli_query($link, $query);


    if ($result) {
        header('Location:retrive_packagemy.php?user_modified = true');
    } else {
        $errors[] = 'failed to modify the  record';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/update package.css">
  <title>Document</title>
</head>
<body>
  

<div class="loginform">

    <h1>Package Update</h1>
    <?php
            if (isset($errors) && !empty($errors)) {
                echo "<p class='error'>Invalid Username / Password</p>";
            }
            ?>
            <form action="update_package.php" method="POST" enctype="multipart/form-data">
        <p>Name</p>
        <input type="text" name="name" placeholder="Enter Name">
        <p>Duration</p>
        <input type="text" name="duration" placeholder="Enter Duration">
        <p>Location</p>
        <input type="text" name="location" placeholder="Enter location">
        <p>Package Price</p>
        <input type="text" name="price" placeholder="Enter Package Price">
        <input type="submit" name="submit" value="Change">
        </form>
</div>
  
</body>
</html>