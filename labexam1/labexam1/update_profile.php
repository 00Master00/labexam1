<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idNumber = $_POST['id-number'];
$fullName = $_POST['full-name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$address = $_POST['address'];
$province = $_POST['province'];
$postalCode = $_POST['postal-code'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$birthdate = $_POST['birthdate'];

$sql = "UPDATE users SET 
    full_name='$fullName', 
    gender='$gender', 
    age=$age, 
    address='$address', 
    province='$province', 
    postal_code='$postalCode', 
    phone='$phone', 
    email='$email', 
    birthdate='$birthdate'
WHERE id_number='$idNumber'";

if ($conn->query($sql) === TRUE) {
    echo "Profile updated successfully. <a href='job-seeker.html'>Back to profile</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
