<?php session_start() ?>

<?php require_once 'connection.php'; ?>
<?php
if (!isset($_SESSION['role']) == "safari_owner") {
    header('Location: homepage.php');
}





$role = $_SESSION['role'];
$uid = $_SESSION['user_id'];
$name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$address = $_SESSION['address'];
// $country = $_SESSION['country'];
// $city = $_SESSION['city'];
$mail = $_SESSION['email'];
$nic = $_SESSION['NIC'];
$phone_number = $_SESSION['phone_no'];
$have_vehicle = $_SESSION['have_vehicle'];
$early_experience = $_SESSION['early_experience'];

// $vehicle = $_SESSION['have_vehicle'];


?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        .profile-main {
            display: flex;
            flex-direction: row;
        }

        .profile-left {
            flex: 50%;
            padding: 20px;
            background-color: white;
        }

        .profile-right {
            flex: 50%;
            padding: 20px;
            background-color: blue;
        }

        .profile_icon {
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="profile-main">
        <div class="profile-left">
            <h1> User Id: : <?php echo "$uid";  ?></h1>
            <h1> Full Name: <?php echo "$name" . "$last_name" ?></h1>
            <h1> Address: <?php echo "$address" ?></h1>
            <h1> Email: <?php echo "$mail" ?></h1>
            <h1> NIC Number : <?php echo "$nic" ?></h1>
            <h1> Early Experience : <?php echo "$early_experience" ?></h1>
            <h1> Have Vehicle : <?php echo "$have_vehicle" ?></h1>

            <h1> Mobile Phone Number: <?php echo "$phone_number" ?></h1>

            <button><a onclick="return confirm('Are you sure you want to delete your account ?');" href="delete_my_profile_safari_owner.php?user_id=<?php echo $uid;  ?>">Delete</a></button>,<br>
            <button><a onclick="return confirm('Are you sure you want to Update your account ?');" href="update_my_profile_safari_owner.php?user_id=<?php echo $uid;  ?>">Update</a></button>




        </div>
        <div class="profile-right">
            <div class="image_icon">
                <img src="../Images/user_profile.png" alt="" width="200px" height="200px" />
            </div>
        </div>
    </div>
</body>

</html>