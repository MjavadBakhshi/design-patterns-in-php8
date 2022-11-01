<?php

use DesignPatterns\Observer\{
    YoutubeChanel,
    User
};


require "vendor/autoload.php";

$users = [
    new User('Mohammad javad'),
    new User('Ashkan'),
    new User('Mahsa'),
];
$chanel = new YoutubeChanel($users);

/** upload first video */
$chanel->uploadVideo();
echo "============================\n";
/** Unsubscribe Ashkan */
$chanel->detach($users[1]);
/** upload second video */
$chanel->uploadVideo();
