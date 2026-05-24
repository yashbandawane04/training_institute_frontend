<?php
$conn = new mysqli("localhost", "root", "", "mh_yashwardhan_institute");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alternate_phone = $_POST['alternate_phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$education_qualification = $_POST['education_qualification'];
$occupation = $_POST['occupation'];
$registration_date = $_POST['registration_date'];

$sql = "INSERT INTO students (full_name, date_of_birth, gender, email, phone, alternate_phone, address, city, state, pincode, education_qualification, occupation, registration_date)
        VALUES ('$full_name', '$date_of_birth', '$gender', '$email', '$phone', '$alternate_phone', '$address', '$city', '$state', '$pincode', '$education_qualification', '$occupation', '$registration_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: courses_form.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
