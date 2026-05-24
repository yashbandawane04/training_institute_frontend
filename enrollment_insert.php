<?php
$conn = new mysqli("localhost", "root", "", "mh_yashwardhan_institute");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$batch_id = $_POST['batch_id'];
$enrollment_date = $_POST['enrollment_date'];
$status = $_POST['status'];
$remarks = $_POST['remarks'];

$sql = "INSERT INTO enrollments (student_id, course_id, batch_id, enrollment_date, status, remarks)
        VALUES ('$student_id', '$course_id', '$batch_id', '$enrollment_date', '$status', '$remarks')";

if ($conn->query($sql) === TRUE) {
    header("Location: payment_form.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
