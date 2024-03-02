<?php

    // Create a new DateTime object representing the current date
    $currentDate = new DateTime();

    // Modify the date by adding 10 days
    $currentDate->modify('+45 days');

    // Output the modified date
    echo $currentDate->format('Y-m-d');

    // Create a new DateTime object representing the modified date
    $modifiedDate = new DateTime('2024-03-12'); // You should modify this to the actual modified date

    // Create a new DateTime object representing the current date
    $currentDate = new DateTime();

    // Calculate the difference between the modified date and the current date
    $interval = $currentDate->diff($modifiedDate);

    // Output the number of days left
    echo $interval->format('%R%a days');


?>