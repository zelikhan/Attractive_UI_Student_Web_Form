<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asm";
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
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$birthdate = $_POST['birthdate'];
$p_address = $_POST['p_address'];
$t_address = $_POST['t_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$degree_name = $_POST['degree_name'];
$email = $_POST['email'];
$course_list = $_POST['course_list'];
$prerequisites = $_POST['prerequisites'];
$bachelor = $_POST['bachelor'];
$query = "INSERT INTO data (`f_name`,`l_name`,`birthdate`,`p_address`,`t_address`,`city`,`state`,`zip`,`country`,`degree_name`,`email`,`course_list`,`prerequisites`,`bachelor`)
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