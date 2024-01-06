<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $time = $_POST['time'];

    // Calculate battery capacity
    $capacity = $current * $time;

    // Redirect back to the main page with the result
    header('Location: index.html?result=' . $capacity);
    exit();
}
?>
