<?php session_start(); ?>
<?php require_once '../Php/connection.php'; ?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('location: my_profile_safari_owner.php');
} ?>
<?php

$errors = array();
$uid = '';
$first_name = '';
$last_name = '';
$address = '';
$email = '';
$nic = '';


if (isset($_GET['user_id'])) {
    $uid = mysqli_real_escape_string($link, $_GET['user_id']);
    $query = "SELECT * FROM user WHERE id = {$uid} LIMIT 1";

    $result_set = mysqli_query($link, $query);


    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $result = mysqli_fetch_assoc($result_set);
            $first_name = $result['first_name'];
            $last_name = $result['last_name'];
            $address = $result['address'];
            $email = $result['email'];
            $nic = $result['NIC'];
        } else {
            header('Location:my_profile_safari_owner.php?err=user_not_found');
        }
    } else {
        //query successful
        header('Location:my_profile_safari_owner.php?err=query_failed');
    }
}



if (isset($_POST['submit'])) {
    $uid = $_POST['user_id'];
    $first_name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $last_name = $_POST['last_name'];

    $query = "UPDATE user SET first_name = '{$first_name}',last_name = '{$last_name}', address = '{$address}' , email = '{$email}' , NIC = '{$nic}'  WHERE id = {$uid} LIMIT 1";

    $result = mysqli_query($link, $query);


    if ($result) {
        header('Location:my_profile_safari_owner.php?user_modified = true');
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

        <h1>User Update</h1>
        <?php
        if (isset($errors) && !empty($errors)) {
            echo "<p class='error'>Invalid Username / Password</p>";
        }
        ?>
        <form action="update_my_profile_safari_owner.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $uid; ?>">
            <p>First Name:</p>
            <input type="text" name="name" placeholder="Enter Name">
            <p>Last Name</p>
            <input type="text" name="last_name" placeholder="Enter Last Name">
            <p>Address:</p>
            <input type="text" name="address" placeholder="Enter Address">
            <p>NIC Number</p>
            <input type="text" name="nic" placeholder="Enter NIC Number">
            <p>Email:</p>
            <input type="text" name="email" placeholder="Enter Address">
            <input type="submit" name="submit" value="Change">
        </form>
    </div>

</body>

</html>