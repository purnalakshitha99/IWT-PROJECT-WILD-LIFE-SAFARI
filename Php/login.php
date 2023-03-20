<?php session_start() ?>

<?php require_once 'connection.php'; ?>
<?php


//check for form submission
if (isset($_POST['submit'])) {

  $error = array();
  //check if username and password has been entered
  if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
    $error[] = "Userame empty";
  }

  if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1) {
    $error[] = "password empty";
  }

  //check if there are any errors in the form
  if (empty($error)) {

    //save username and passowrd into variables
    $username = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $encPass = sha1($password);

    //prepare database query
    $query = "SELECT * FROM user 
        WHERE email = '{$username}' AND password = '{$encPass}'LIMIT 1";

    $result = mysqli_query($link, $query);

    //check if the user is valid
    if ($result) {

      //query succesful
      if (mysqli_num_rows($result) == 1) {
        //user found            


        $user = mysqli_fetch_assoc($result);


        $_SESSION['role'] = $user['role'];
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['country'] = $user['country'];
        $_SESSION['city'] = $user['city'];
        $_SESSION['NIC'] = $user['NIC'];
        $_SESSION['phone_no'] = $user['phone_no'];
        $_SESSION['have_vehicle'] = $user['have_vehicle'];
        $_SESSION['early_experience'] = $user['early_experience'];








        //redirect to homepage.php
        if ($user['role'] === 'admin') {
          header('Location: admin_page.php');
        } elseif ($user['role'] === 'safari_owner') {
          header('Location: safari_homepage.php');
        } else {
          header('Location: homepage.php');
        }
      } else {
        $error[] = "User not found / invalid username or password";
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../Css/login.css" />
</head>

<body>

  <?php
  if (!empty($array)) {
    echo "error in code";
  }


  ?>
  <div class="login">
    <form action="login.php" method="POST">
      <fieldset>
        <legend>
          <h2>Login</h2>
        </legend>

        <?php if (isset($error) && !empty($error)) {
          echo ' <p class = "error"> Invalid Username or Password</p>';
        }
        ?>

        <?php

        if (isset($_GET['logout'])) {

          echo ' <p class = "logout"> Succesfully Logged Out</p>';
        }

        ?>

        <p>
          <label for="username">Username </label>
          <input type="text" name="email" id="username" placeholder="Enter email" required>
        </p>
        <p>
          <label for="password">Password </label>
          <input type="password" name="password" id="password" placeholder="password" required>
        </p>
        <p>
          <button type="submit" name="submit">Log in</button>
        </p>
        <p>Register as <a href="user_registration.php">User</a> </p>
        <p>Register as <a href="safari_owner_registration.php">Safari Owner</a> </p>
      </fieldset>

    </form>
  </div>
</body>

</html>

<?php
mysqli_close($link);
?>