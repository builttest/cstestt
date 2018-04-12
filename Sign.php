<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $first  = $_POST['firstname'];
    $last  = $_POST['lastname'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (firstname,lastname,uid,pwd,email)
    VALUES ('$first','$last','$uid','$pwd','$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   header("Location: index.html")

    
?>