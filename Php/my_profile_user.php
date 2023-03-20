<?php session_start() ?>

<?php require_once 'connection.php'; ?>
<?php

$role = $_SESSION['role'];
$uid = $_SESSION['user_id'];
$name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$address = $_SESSION['address'];
$country = $_SESSION['country'];
$city = $_SESSION['city'];
// $NIC = $_SESSION['NIC'];
$phone_number = $_SESSION['phone_no'];
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
      background-color: red;
    }

    .profile-right {
      flex: 50%;
      padding: 20px;
      background-color: yellow;
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
      <h1> Country: <?php echo "$country" ?></h1>

      <h1> Mobile Phone Number: <?php echo "$phone_number" ?></h1>

    </div>
    <div class="profile-right">
      <div class="image_icon">
        <img src="../Images/user_profile.png" alt="" />
      </div>
    </div>
  </div>
</body>

</html>