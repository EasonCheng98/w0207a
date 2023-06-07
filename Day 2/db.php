<?php


    // 一定要照着顺序 要不然 connect不到
    $hostname = "localhost";
    $username = "w0207a";
    $password = "*tH8.2)LO.8gFE0U";
    $database = "w0207a";

    // connect database // 一定要照着顺序 要不然 connect不到
    $link = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_error($link));



?>