 <?php
 include 'connect.php ';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybercell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO  personaldetails(name, mobnum, emailid,address)
VALUES ('John', '99058456', 'john@example.com' , 'bangalore')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 