<?php

require_once "init.php";


$profile = $_GET['profile'];
$content = $_GET['content'];
$privacy = $_GET['privacy'];

$post = $linkedin->linkedInTextPost($_SESSION['linkedInAccessToken'],$profile,  $content, $privacy);
$post = json_decode($post);
if (isset($post->id)) {
    echo ("POSTED.");
} else {
    echo "FAILED.";
}
?>
<br>
<a href="/profile.php">Back to Profile</a>