<?php session_start()?>
<?php require_once 'connection.php';?>
<?php 
if(!isset($_SESSION['role']) == "admin"){
  header('Location: login.php');
}?>

<?php 
$user_details = '';

$query = "SELECT * FROM user";
$users = mysqli_query($link,$query);

if($users){
  while($user = mysqli_fetch_assoc($users)){
    $user_details .= "<tr>";
    $user_details .= "<td>{$user['id']}</td>";
    $user_details .= "<td>{$user['first_name']}</td>";
    $user_details .= "<td>{$user['last_name']}</td>";
    $user_details .= "<td>{$user['email']}</td>";
    $user_details .= "<td>{$user['phone_no']}</td>";
    $user_details .= "<td>{$user['address']}</td>";
    $user_details .= "<td>{$user['country']}</td>";
    $user_details .= "<td>{$user['city']}</td>";
    $user_details .= "<td>{$user['early_experience']}</td>";
    $user_details .= "<td>{$user['have_vehicle']}</td>";
    $user_details .= "<td>{$user['role']}</td>";
    $user_details .= "</tr>";
        }

        }else{
        echo "database query failed";
        }
?>


<?php 
  $package_details = '';

  $query = "SELECT * FROM package";
  $packages = mysqli_query($link,$query);

  if($packages){
  while($package = mysqli_fetch_assoc($packages)){
    $package_details .= "<tr>";
    $package_details .= "<td>{$package['id']}</td>";
    $package_details .= "<td>{$package['name']}</td>";
  $package_details .= "<td>{$package['location']}</td>";
  $package_details .= "<td>{$package['duration']}</td>";
    $package_details .= "<td>{$package['price']}</td>";
        $package_details .= "</tr>";
        }

        }else{
        echo "database query failed";
        }
?>

<?php 
  $booking_details = '';

  $query = "SELECT * FROM booking";
  $bookings = mysqli_query($link,$query);

  if($bookings){
    while($booking = mysqli_fetch_assoc($bookings)){
      $booking_details .= "<tr>";
      $booking_details .= "<td>{$booking['user_id']}</td>";
      $booking_details .= "<td>{$booking['package_id']}</td>";
      $booking_details .= "<td>{$booking['status']}</td>";
      $booking_details .= "</tr>";
          }

          }else{
          echo "database query failed";
          }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin </title>
  <link rel="stylesheet" href="../Css/admin page.css">
</head>

<body>
  <div class="p">
    <p>welcome admin</p>
  </div>

  <!-- <div class ="KD">
 <center><p class="KD">Welcome Admin</p></center>
 </div> -->

  <!-- View All users in user table -->
  <div>
    <p>users </p>
    <table id="adminTable">
      <div class="menu">
        <tr>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Country</th>
          <th>City</th>
          <th>Early Experience</th>
          <th>Have Vehicle</th>
          <th>Role</th>
        </tr>
      </div>
      <tr>
        <?php echo "$user_details"; ?> </tr>
    </table>
  </div>

  <!-- View all packages in package table -->
  <div>
    <p>packages </p>
    <table id="adminTable">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Location</th>
        <th>Duration</th>
        <th>Price</th>
      </tr>
      <tr>
        <?php echo "$package_details"; ?> </tr>
    </table>
  </div>


  <!-- view all booking request in booking table -->
  <div>
    <p>bookings </p>
    <table id="adminTable">
      <tr>
        <th>User ID</th>
        <th>Package ID</th>
        <th>Status</th>
      </tr>
      <tr>
        <?php echo "$booking_details"; ?> </tr>
    </table>
  </div>

</body>

</html>

<?php mysqli_close($link);?>