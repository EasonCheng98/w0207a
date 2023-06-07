<?php

    include "db.php";

    $myCategory = ["Home Appliaances","Stationary","Food Beverages","Clothes","Furniture"];

    foreach ($myCategory as $a) {

    mysqli_query($link, "INSERT INTO `category` (title, created_date) VALUES ('$a', NOW())") or die(mysqli_error($link));

}
?>