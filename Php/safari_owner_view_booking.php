<?php session_start();?>
<?php require_once 'connection.php'?>
<?php 
if(!isset($_SESSION['role']) == "safari_owner"){
  header('Location: homepage.php');
}
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>view Package</title>
</head>

<body>
  <div>
    <p>bookings </p>

    <table border="1px">

      <tr>
        <td>User ID</td>
        <td>Package ID</td>
        <td>Status</td>
      </tr>
      <tr>
        <?php echo "$booking_details"; ?> </tr>
    </table>
  </div>

</body>

</html>

<?php mysqli_close($link)?>