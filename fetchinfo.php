<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "product";
// print_r($_POST);
// exit();
// Create connection
$conn =   mysqli_connect($servername, $username, $password,$bdname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  //  $name = $_POST['name'];

$sql = "SELECT * FROM burberrywomen";
$result =mysqli_query($conn, $sql);
echo mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["p_name"]. " - Name: " . $row["p_detail"]. " " . $row["p_price"]. "<br>". $row["p_qty"]."<br>";
    }
}

$_SESSION['$result'] = $result;
session_write_close();



// header('Location: burberrymensfor.php');

// Create database
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }

$conn->close();

?>
