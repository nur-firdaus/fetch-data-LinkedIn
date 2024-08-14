<?php

require_once "init.php";


$profile = $_GET['profile'];
$content = $_GET['content'];
$link_title = $_GET['link_title'];
$link_desc = $_GET['link_desc'];
$link_url = $_GET['link_url'];
$privacy = $_GET['privacy'];

$post = $linkedin->linkedInLinkPost($_SESSION['linkedInAccessToken'], $profile, $content, $link_title, $link_desc, $link_url , $privacy);
$post = json_decode($post);
if (isset($post->id)) {
    echo ("POSTED.");
} else {
    echo "FAILED.";
}
?>
<br>
<a href="/profile.php">Back to Profile</a>