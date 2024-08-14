<?php

require "init.php";

$profile = $_POST['profile'];
$content = $_POST['content'];
$image_title = $_POST['image_title'];
$image_desc = $_POST['image_desc'];
$privacy = $_POST['privacy'];
$images = [];
foreach ($image_title as $key => $title) {
    $images[$key]['title'] = $title;
    $images[$key]['desc'] = $image_desc[$key];
    $images[$key]['image_path'] = $_FILES["image"]['tmp_name'][$key];
}


$post = $linkedin->linkedInMultiplePhotosPost($_SESSION['linkedInAccessToken'], $profile, $content,   $images , $privacy);

$post = json_decode($post);

if (isset($post->id)) {
    echo "POSTED";
} else {
    echo "FAILED";
}
?>
<br>
<a href="/profile.php">BACK TO PROFILE</a>