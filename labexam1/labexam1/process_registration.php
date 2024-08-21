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

if (empty($idNumber) || empty($fullName) || empty($gender) || empty($age) || empty($address) || empty($province) || empty($postalCode) || empty($phone) || empty($email) || empty($username) || empty($birthdate)) {
    echo "Please fill in all required fields.";
    exit;
}

$sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username or email already exists.";
    exit;
}

$sql = "INSERT INTO users (id_number, full_name, gender, age, address, province, postal_code, phone, email, username, birthdate) VALUES ('$idNumber', '$fullName', '$gender', $age, '$address', '$province', '$postalCode', '$phone', '$email', '$username', '$birthdate')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='เข้าสู่ระบบ.html'>Login here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
