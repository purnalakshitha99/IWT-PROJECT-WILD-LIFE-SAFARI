<?php session_start() ?>

<?php require_once 'connection.php'; ?>


<?php
if (!isset($_SESSION['role']) == "safari_owner") {
  header('Location: homepage.php');
}

$query = "SELECT * FROM Package WHERE owner_id = {$_SESSION['user_id']}";

$result_set = mysqli_query($link, $query);

if ($result_set) {
  //echo mysqli_num_rows($result_set) . "record found<br>";
  //echo "query succsessfull";

  // $table = array();
  '<div class = "t1">';

  $table = '<table class = "table1">';
  $table .= '
    <tr>
    <th>Name </th>
    <th>Duration </th>
    <th>Location </th>
    <th>Price </th>
    <th>Change </th>
    <th>Delete </th>
    </tr>';

  while ($record = mysqli_fetch_assoc($result_set)) {
    $table .= '<tr>';
    $table .= '<td>' . $record['name'] . '</td>';
    $table .= '<td>' . $record['location'] . '</td>';
    $table .= '<td>' . $record['duration'] . '</td>';
    $table .= '<td>' . $record['price'] . '</td>';
    $table .= "<td><button class=\"itemListDltBtn\"><a href=\"deletepackage.php?item_ID={$record['id']}\" onclick=\"return confirm('Are you sure you want to delete this item ?');\">Delete</a></button></td>";
    $table .= "<td><button class=\"itemListDltBtn\"><a href=\"update_package.php?item_ID={$record['id']}\" onclick=\"return confirm('Are you sure you want to change this item ?');\">Change</a></button></td>";
    $table .= "</tr>";
  }
  $table .= "</table>";
} else {
  echo "query fail";
}
//</div>;


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retrive package</title>
  <link rel="stylesheet" href="../Css/retrive_packagemy.css">



</head>

<body>
  <h1 class="h1">RETRIVE SAFARI&nbsp PACKAGE</h1><br>
  <?php
  echo "$table";
  ?>




</body>

</html>