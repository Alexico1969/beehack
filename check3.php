<?php

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the input data
$inputData = trim($_GET['data']);  // Use trim to remove any extra white spaces

if ($inputData === "Orlando") {
    echo "True";
} else {
    echo "False";
    // Optionally log what was actually received for debugging
    error_log("Received: " . $inputData);
}

?>