<?php session_start(); ?>
<?php require_once 'connection.php' ?>
<?php
if (!isset($_SESSION['role']) == "user") {
  header('Location: homepage.php');
} ?>
<?php
$id = $_GET['package_id'];



$package_details = '<table class = "table4">';
$package_details .= '<tr><th>Name</th><th>Location</th><th>Duration</th><th>Price</th></tr>';
$result = '';
$query = "SELECT * FROM package WHERE id = $id";
$packages = mysqli_query($link, $query);

if ($packages) {
  while ($package = mysqli_fetch_assoc($packages)) {
    $package_details .= "<tr>";
    $package_details .= "<td>{$package['name']}</td>";
    $package_details .= "<td>{$package['location']}</td>";
    $package_details .= "<td>{$package['duration']}</td>";
    $package_details .= "<td>{$package['price']}</td>";
    $package_details .= "</tr>";
  }
} else {
  echo "database query failed";
}

if (isset($_POST['submit'])) {
  $user_id =  $_SESSION['user_id'];

  // echo "$user_id";
  // echo "$id";

  $query = "INSERT INTO `booking`(`user_id`,`package_id`)
            VALUES('$user_id','$id')";
  $result = mysqli_query($link, $query);
}

if ($result == 1) {
  header('Location: masage.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Package View </title>
  <link rel="stylesheet" href="../Css/single_package_view.css">

</head>

<body>
  <?php require_once('../inc/header.php');?>
  <br><br><br><br>
  <div>
    <form method="POST">

      <?php if ($result != 1) { ?>
      <h1 class="h14">
        <h1 class=h14>PACKAGES</h1>
        </p>
        <?php echo "$package_details"; ?> </tr>
        </table>
        <button value="submit" class="submitButton" name="submit" type="submit">Book this package</button>
        <?php } ?>

    </form>

  </div>
  <br><br><br><br><br>
  <div>
    <?php require_once('../inc/footer.php');?>
  </div>
</body>

</html>
<?php mysqli_close($link) ?>