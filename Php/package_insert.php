<?php session_start() ?>

<?php require_once '../Php/connection.php';?>

<?php
if(!isset($_SESSION['role']) == "safari_owner"){
  header('Location: homepage.php');
}
//check for form submittion 

if (isset($_POST['submit'])) {



    $errors = array();


    if (empty($errors)) {
        //save username and password into variables
        $name = mysqli_real_escape_string($link, $_POST['name']);
        $duration = mysqli_real_escape_string($link, $_POST['duration']);
        $location = mysqli_real_escape_string($link, $_POST['location']);
        $price = mysqli_real_escape_string($link, $_POST['price']);
        $user_id =  $_SESSION['user_id'];

        echo $user_id;
    }

    //prepare database query
    // $query = "SELECT * FROM userkd
    // WHERE email = '{$email}' AND password = '{$hashed_password}'LIMIT 1";

    $sql = "INSERT INTO package (name, duration, location,owner_id, price)
VALUES ('$name', '$duration', '$location','$user_id','$price')";



    $result_set = mysqli_query($link, $sql);
    //query successfull
    if ($result_set) {
        //check if the user is valid
        echo "<h1>Inserting Data</h1> ";
        header('Location: retrive_packagemy.php');
    } else {
        //check if there are any errors in the form
        $errors[] = 'database qurey failed';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/package insert.css">
  <title>Document</title>
</head>

<body>

  <div class="loginform">
    <h1>Package Insert</h1>
    <form action="package_insert.php" method="POST">
      <?php
                if (isset($errors) && !empty($errors)) {
                    echo "<p class='error'>Invalid Username / Password</p>";
                }
                ?>
      <p>Package Name</p>
      <input type="text" name="name" placeholder="package name">
      <p>Duration</p>
      <input type="text" name="duration" placeholder="days">
      <p>Location</p>
      <input type="text" name="location" placeholder="Location">
      <p>Package Price</p>
      <input type="text" name="price" placeholder="Enter package price">
      <input type="submit" name="submit" value="Save">

    </form>
  </div>

</body>

</html>