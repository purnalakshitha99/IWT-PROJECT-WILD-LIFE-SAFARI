<?php session_start(); ?>
<?php require_once('../Php/connection.php') ?>
<?php

//checking if a user is logged in;
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
}


if (!isset($_SESSION['role']) == "safari_owner") {
  $_SESSION['owner_id'] = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Css/safari home page.css">
  <title>Document</title>
  <link rel="stylesheet" href="../Css/retrive_book.css">

  <style>
    main {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      margin-top: 12%;
    }

    .navigate1 {
      text-align: center;
      text-decoration: none;
      font-size: 30px;
      cursor: pointer;
      border-radius: 25px;
      padding: 50px 20px 20px 10px;
      transition: all 0.3s ease 0s;
      width: 20%;
      margin-right: 50px;
      height: 10cm;
      margin: 23px;
    }

    .jcbutton {
      background: transparent;
      border: none;
      color: #ffffff;
      font-weight: bold;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .navigate1 {
      background-color: #26abff;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.4);
    }

    .navigate1:hover {
      background-color: #1aae6e;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.4);
      color: #f1f1f1;
    }
  </style>
</head>

<body>
  <header>

  </header>
  <main>
    <div class="navigate1">
      <button class="jcbutton"><a href="package_insert.php">Add Package</a> </button>
      <br /><br /><br /><br />
      <i class=""></i>
    </div>
    <div class="navigate1">
      <button class="jcbutton"><a href="retrive_book.php"> View Booking Request</a> </button>
      <br /><br /><br /><br />
      <i class=""></i>
    </div>
    <div class="navigate1">
      <button class="jcbutton"><a href="retrive_packagemy.php">Vieew Package</a> </button>
      <br /><br /><br /><br />
      <i class=""></i>
    </div>
    <div class="navigate1">
      <button class="jcbutton"><a href="my_profile_safari_owner.php"> View My Profile</a> </button>
      <br /><br /><br /><br />
      <i class=""></i>
    </div>
  </main>

</body>

</html>