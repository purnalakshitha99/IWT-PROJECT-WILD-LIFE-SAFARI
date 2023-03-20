<?php session_start(); ?>
<?php require_once 'connection.php' ?>
<?php
if (!isset($_SESSION['role']) == "user") {
  header('Location: homepage.php');
}
$package_details = '<table class="table3">';
$package_details .= '<tr><th>Name</th><th>Location</th><th>Duration</th><th>Price</th><th>View</th></tr>';

$query = "SELECT * FROM package";
$packages = mysqli_query($link, $query);

if ($packages) {
  while ($package = mysqli_fetch_assoc($packages)) {
    $package_details .= "<tr>";
    $package_details .= "<td>{$package['name']}</td>";
    $package_details .= "<td>{$package['location']}</td>";
    $package_details .= "<td>{$package['duration']}</td>";
    $package_details .= "<td>{$package['price']}</td>";
    $package_details .= "<td><a href=\"single_package_view.php?package_id={$package['id']}\">View</a></td>";
    $package_details .= "</tr>";
  }
} else {
  echo "database query failed";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>view Package</title>
  <link rel="stylesheet" href="../Css/user_view_package.css">



</head>

<body>
  <?php require_once('../inc/header.php');?>
  <br>
  <div>
    <p>
    <h1 class="h13">PACKAGES</h1>
    </p>
    <?php echo "$package_details"; ?> </tr>
    </table>
  </div>
  <br>
  <br>
  <br>
  <div> <?php require_once('../inc/footer.php');?></div>

</body>

</html>

<?php mysqli_close($link) ?>