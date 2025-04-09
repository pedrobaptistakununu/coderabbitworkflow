<?php
// Set the default timezone (you may change this according to your location)
date_default_timezone_set('America/New_York'); // Change to your preferred timezone

// Get the current hour
$currentHour = date('H');

// Determine the greeting based on the hour
if ($currentHour >= 5 && $currentHour < 13) {
    $greeting = "Good Morning";
} elseif ($currentHour >= 13 && $currentHour < 18) {
    $greeting = "Good Evening";
} else {
    $greeting = "Good Night";
}

// Output the greeting
echo $greeting;
?>