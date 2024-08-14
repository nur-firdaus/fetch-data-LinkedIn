<?php

require "init.php";

if ($_GET['state'] != $_SESSION['linkedincsrf']) {
    die("INVALID REQUEST");
}

$accessToken = $linkedin->getAccessToken($_GET['code']);
if (!$accessToken) {
    die("NO ACCESS TOKEN FOUND. LOGIN AGAIN");
}

$_SESSION['linkedInAccessToken'] = $accessToken;
echo $accessToken;
//header("location: /Linkedin/profile.php");
die();



#firdausforsocialmedia@gmail.com DellMsi123!