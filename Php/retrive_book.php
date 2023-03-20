<?php session_start() ?>

<?php

$link = mysqli_connect("localhost", "root", "", "ceylon_wild_safaries");
if (mysqli_connect_error()) {
    die("Database connection failed" . mysqli_connect_error());
} else {
    //echo "connection successfull";
}
?>


<?php
$id = $_SESSION['user_id'];

$role = $_SESSION['role'];
$name = $_SESSION['first_name'];

"<br>";
echo "<h2>{$role} Account:{$name} ID:{$id} </h2> ";



$query = "SELECT * FROM booking WHERE user_id = $id";

$result_set = mysqli_query($link, $query);

if ($result_set) {
    // echo mysqli_num_rows($result_set) . "record found<br>";
    // echo "query succsessfull";

    // $table = array();
    $table = '<table class = "table2">';
    $table .= '<tr><th>Booking Id</th><th>User ID</th><th>Package ID</th><th>Status</th></tr>';

    while ($record = mysqli_fetch_assoc($result_set)) {
        $table .= '<tr>';
        $table .= '<td>' . $record['b_id'] . '</td>';
        $table .= '<td>' . $record['user_id'] . '</td>';
        $table .= '<td>' . $record['package_id'] . '</td>';
        $table .= '<td>' . $record['status'] . '</td>';
        // $table .= "<td><button class=\"itemListDltBtn\"><a href=\"delete_book.php?item_ID={$record['b_id']}\" onclick=\"return confirm('Are you sure you want to delete this item ?');\">Delete</a></button></td>";
        // $table .= "<td><button class=\"itemListDltBtn\"><a href=\"update_book.php?item_ID={$record['b_id']}\" onclick=\"return confirm('Are you sure you want to change this item ?');\">Change</a></button></td>";
        $table .= "</tr>";
    }
    $table .= "</table>";
} else {
    echo "query failed";
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrive Booking</title>
    <link rel="stylesheet" href="../Css/retrive_book.css">

</head>

<body>
    <h1 class="h12">Retrive Booking</h1><br>
    <?php
    echo "$table";
    ?>




</body>

</html>