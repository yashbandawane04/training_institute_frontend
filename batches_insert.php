<?php
$conn = new mysqli("localhost", "root", "", "mh_yashwardhan_institute");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_id = $_POST['course_id'];
$trainer_id = $_POST['trainer_id'];
$batch_code = $_POST['batch_code'];
$batch_name = $_POST['batch_name'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$days = $_POST['days'];
$time_slot = $_POST['time_slot'];
$mode = $_POST['mode'];
$status = $_POST['status'];

$sql = "INSERT INTO batches (course_id, trainer_id, batch_code, batch_name, start_date, end_date, days, time_slot, mode, status)
        VALUES ('$course_id', '$trainer_id', '$batch_code', '$batch_name', '$start_date', '$end_date', '$days', '$time_slot', '$mode', '$status')";

if ($conn->query($sql) === TRUE) {
    header("Location: enrollment_form.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
