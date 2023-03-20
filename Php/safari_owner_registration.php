<?php require_once 'connection.php'; ?>
<?php 

if(isset($_POST['submit'])){
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $phone_no = $_POST["phone_no"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $password = $_POST["password"];
  $id_no = $_POST["NIC"];
  $experience = $_POST["early_experience"];
  $vehicle = $_POST["have_vehicle"];
  $role = "safari_owner";

  $encPass = sha1($password);
  
  $query = "INSERT INTO `user` (`first_name`,`last_name`,`email`,`phone_no`,`address`,`city`,`password`,`NIC`,`early_experience`,`have_vehicle`,`role`) 
  VALUES('$first_name','$last_name','$email','$phone_no','$address','$city','$encPass','$id_no','$experience','$vehicle','$role')";
  mysqli_query($link, $query);

  header('Location: login.php');
}


?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Css/safari_owner_registration.css">
  <title>Safari_Owner_Registration</title>
</head>

<body>
  <div class="main_dev">
    <div class="container">
    <form action="safari_owner_registration.php" method="POST">
      <div>
        <p>
          <label for="first_name"> First Name : </label>
          <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required />
        </p>
      </div>
      <div>
        <p>
          <label for="last_name"> Last Name : </label>
          <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required />
        </p>
      </div>


      <div>
        <p>
          <label for="email"> Email Address : </label>
          <input type="email" placeholder="Enter Email Address" name="email" id="email" required />
        </p>
      </div>
      <div>
        <p>
          <label for="phone_number"> Phone Number : </label>
          <input type="tel" placeholder="Mobile Phone number" name="phone_no" id="phone_number" required />
        </p>
      </div>


      <div>
        <p>
          <label for="identity card"> Identity Card : </label>
          <input type="text" placeholder="Enter Identity Card number" name="NIC" id="identity card" required />
        </p>
      </div>
      <div>
        <p>
          <label for="address"> Address : </label>
          <input type="text" placeholder="Address" name="address" id="address" required /> <br /><br />
        </p>
      </div>


      <div>
        <p>
          <label for="password"> Password : </label>
          <input type="password" placeholder="Password" name="password" id="C_password" minlength="8" required />
        </p>
      </div>
      <div>
        <label for="r_password">Re Enter Password :</label>
        <input type="password" placeholder="Re Enter Password" name="password" id="r_password" minlength="8" required />
      </div>
      <div>
        <p>
          <label for="experience">Early Working Experience: Yes</label>
          <input type="radio" name="early_experience" value="yes" id="experience" required />
          <label for="experience">No : </label>
          <input type="radio" name="early_experience" value="no" id="experience" required />
        </p>
      </div>
      <div>
        <p>
          <label for="vehicle">Have your Own Vehicle? : Yes</label>
          <input type="radio" name="have_vehicle" value="have" id="vehicle" required />
          <label for="vehicle">No : </label>
          <input type="radio" name="have_vehicle" value="no" id="vehicle" required />
        </p>
      </div>
      <div>
        <p>
          <input type="checkbox" name="term_and_condition" id="agree" required />
          <label for="agree">I agree to terms and conditions</label>
        </p>
      </div>



      <button type="submit" value="Sign Up" name="submit">Sign Up</button>
    </form>
  </div>
  </div>
  

</body>

</html>

<?php mysqli_close($link); ?>