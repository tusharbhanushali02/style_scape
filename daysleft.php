<?php

    function getDaysLeft($paymentDate, $subscriptionDays) {
        // Calculate the current date
        $currentDate = strtotime(date("Y-m-d"));
        // Calculate the subscription end date
        $subscriptionEndDate = strtotime("+$subscriptionDays days", $paymentDate);
        // Calculate the days remaining
        $daysLeft = floor(($subscriptionEndDate - $currentDate) / (60 * 60 * 24));
        return $daysLeft;
    }

?>
