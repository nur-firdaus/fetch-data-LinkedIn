<?php

require_once "init.php";


$profile = $_POST['profile'];
$content = $_POST['content'];
$image = $_FILES['image']['tmp_name'];
$image_title = $_POST['image_title'];
$image_desc = $_POST['image_desc'];
$privacy = $_POST['privacy'];

$post = $linkedin->linkedInPhotoPost($_SESSION['linkedInAccessToken'], $profile, $content, $image,  $image_title, $image_desc , $privacy, false);

$post = json_decode($post);
if (isset($post->id)) {
    echo ("POSTED.");
} else {
    echo "FAILED.";
}
?>
<br>
<a href="/profile.php">Back to Profile</a>