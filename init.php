<?php

session_start();

require "vendor/autoload.php";
require "LinkedIn.php";

use myPHPnotes\LinkedIn;

$app_id = "783k2v42bat8ib";
$app_secret = "ApWVJzffXO0eEaNG";
$app_callback = "http://127.0.0.1:8080/Linkedin/callback.php";
$app_scopes = "openid profile w_member_social email";

$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);