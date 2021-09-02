
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "ec2-54-74-95-84.eu-west-1.compute.amazonaws.com";
$username = "sfrdninvuzwazx";
$password = "171e67e15daa57dc09bd67aea77180bf2e1ac193e7bef30260ae3ecfe15922e1";
$dbname = "d4khoej2cnsn2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM Pricelist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>