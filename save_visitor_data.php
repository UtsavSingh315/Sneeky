<?php
$serialNo = $_POST['serialNo'];
$dateTime = $_POST['dateTime'];
$deviceId = $_POST['deviceId'];
$geolocation = $_POST['geolocation'];
$logFile = "geoDataLog.txt";

// Create the data string
$data = $serialNo . "," . $dateTime . "," . $deviceId . "," . $geolocation;

// Open the log file in append mode
$file = fopen($logFile, 'a');

if ($file) {
    // Write the data to the log file
    fwrite($file, $data . PHP_EOL);

    // Close the file
    fclose($file);

    echo "Data saved successfully!";
} else {
    echo "Error opening the log file.";
}
?>

