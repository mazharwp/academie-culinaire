<?php
// Get the email parameter from the query string
$email = $_GET['email'];

// Your Kickbox API key
$apiKey = "live_464b72481f52dd81690f5f10a8e0fe2bca665346cab370d54c6b5eeccf906a72";

// Prepare the API URL
$apiUrl = "https://api.kickbox.com/v2/verify?email=" . urlencode($email) . "&apikey=" . $apiKey;

// Initialize cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Set the header for JSON response
header('Content-Type: application/json');
echo $response;
?>
