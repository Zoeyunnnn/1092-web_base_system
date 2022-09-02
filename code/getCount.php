<?php
if (!isset($_COOKIE['view_counted']) || $_COOKIE['view_counted'] != 1) {
    $sql2 = "UPDATE `products` SET `click_count`=`click_count`+1 WHERE `id` = " . $id . ";";
    mysqli_query($link, $sql2);
    $_COOKIE['view_counted']=1;
}