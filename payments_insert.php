<?php
$conn = new mysqli("localhost", "root", "", "mh_yashwardhan_institute");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_id = $_POST['student_id'];
$amount = $_POST['amount'];
$amount_paid = $_POST['amount_paid'];
$total_fees = $_POST['total_fees'];
$due_amount = $_POST['due_amount'];
$payment_method = $_POST['payment_method'];
$transaction_id = $_POST['transaction_id'];
$payment_date = $_POST['payment_date'];

$sql = "INSERT INTO payments (student_id, amount, amount_paid, total_fees, due_amount, payment_method, transaction_id, payment_date)
        VALUES ('$student_id', '$amount', '$amount_paid', '$total_fees', '$due_amount', '$payment_method', '$transaction_id', '$payment_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: registration_success.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
