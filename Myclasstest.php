<!DOCTYPE html>
<html>
<body>

<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    
    if($row["uid"] === $_REQUEST['uid']){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        $_SESSION['name'] = $row["firstname"];
        $_SESSION['lastname'] = $row["lastname"];
        print_r($_SESSION);
        session_write_close();
        header('location:index.php');
        
    }
}

//$query = mysql_fetch_array($result);
// if(!$query)
// {
    
// }else {
//     session_start();
//     ob_start();
//     $_SESSION['name'] = $query["firstname"];
//     echo $_SESSION['name'];
// }
//header("Location: index.html")
?>

</body>
</html>
