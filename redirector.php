<?php

$type = $_GET['type'];
switch ($type) {
    case 'text':
        header("location: /Linkedin/gettextpost.php");
        die();
        break;
    case 'link':
        header("location: /Linkedin/getlinkpost.php");
        die();
        break;
    case 'image':
        header("location: /Linkedin/getimagepost.php");
        die();
        break;
    case 'images':
        header("location: /Linkedin/getimagespost.php");
        die();
        break;
    default:
        die("INVALID USE OF HEADER INFORMATION");
        break;
}