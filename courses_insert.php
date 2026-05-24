<?php
$conn = new mysqli("localhost", "root", "", "mh_yashwardhan_institute");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_name = $_POST['course_name'];
$description = $_POST['description'];
$duration_weeks = $_POST['duration_weeks'];
$total_hours = $_POST['total_hours'];
$fees = $_POST['fees'];
$syllabus_link = $_POST['syllabus_link'];
$created_at = $_POST['created_at'];
$course_code = $_POST['course_code'];

$sql = "INSERT INTO courses (course_name, description, duration_weeks, total_hours, fees, syllabus_link, created_at, course_code)
        VALUES ('$course_name', '$description', '$duration_weeks', '$total_hours', '$fees', '$syllabus_link', '$created_at', '$course_code')";

if ($conn->query($sql) === TRUE) {
    header("Location: batches_form.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
