<?php  require_once 'connection.php'; ?>
<?php 
  if(isset($_POST['submit'])){
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_no = $_POST["phone_no"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $password = $_POST["password"];
    
    $encPass = sha1($password);
    
    $query = "INSERT INTO `user` (`first_name`,`last_name`,`email`,`phone_no`,`address`,`country`,`city`,`password`) 
    VALUES('$first_name','$last_name','$email','$phone_no','$address','$country','$city','$encPass')";
    $result = mysqli_query($link,$query);
           
        header('Location: login.php'); 
    
  }
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User_Registration</title>
  <link rel="stylesheet" href="../Css/safari_owner_registration.css">
</head>


<body class="body">
  <div class="main_dev">
    <div class="container">
      <form action="user_registration.php" method="POST">
        <p> <label for="first_name"> First Name <br></label>
          <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required />
        </p>
        <p><label for="last_name"> Last Name <br></label>
          <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required />
        </p>
        <p>
          <label for="email"> Email Address <br></label>
          <input type="email" placeholder="Enter Email Address" name="email" id="email" required />
        </p>
        <p>
          <label for="phone_number"> Phone Number <br></label>
          <input type="tel" placeholder="Mobile Phone number" name="phone_no" id="phone_number" required />
        </p>

        <p>
          <label for="address"> Address <br></label>
          <input type="text" placeholder="Address" name="address" id="address" required /> <br /><br />
          <label for="country"> Country/Region <br></label>
          <input type="text" placeholder="Country" name="country" id="country" required /> <br /><br />
          <label for="city"> City <br></label>
          <input type="text" placeholder="City" name="city" id="city" required /> <br />
        </p>
        <p>
          <label for="password"> Password <br></label>
          <input type="password" placeholder="Password" name="password" id="password" minlength="8" required />
          <br /><br />
          <label for="r_password">Re Enter Password <br></label>
          <input type="password" placeholder="Re Enter Password" name="password" id="r_password" minlength="8"
            required />
        </p>
        <p>
          <input type="checkbox" name="term_and_condition" id="agree" required />
          <label for="agree" id="terms">I agree terms and conditions</label>
        </p>
        <button type="submit" value="Sign Up" name="submit" class="submit">Sign Up</button>
      </form>
    </div>
  </div>
</body>

</html>

<?php  mysqli_close($link);  ?>