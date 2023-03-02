<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplab4";
// Create connection
$conn = mysqli_connect($servername,$username, $password,$dbname);
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
else{
echo "Connected successfully";
}
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$query = "INSERT INTO data (`email`,`age`,`gender`,`city`)
VALUES ('".$name."','".$age."','".$gender."','".$city."')";
$chk = mysqli_query($conn, $query);
echo $chk;
if ($chk){
echo "Form Submitted";
}
else{
echo "Form Not Submitted";
}
}
// Close connection
mysqli_close($conn);
?>