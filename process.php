<?php

include "functions.php";

$images = normalize($_FILES['images'] ?? []);
$allowed_file_types = ['image/png', 'image/jpeg', 'image/jpg'];

//process
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}

foreach ($images as $image) {
    // error check
    $image['err_msg'] = [];
    if ($image['error'] == UPLOAD_ERR_NO_FILE)
        $image['err_msg'][] = "No file is uploded!";
    $image["safename"] = preg_replace("/[^a-zA-Z0-9\._-]/", "", basename($image["name"]));
    $target_file = $target_dir . $image["safename"];

    if (is_uploaded_file($image['tmp_name'])) {
        $mime_type = mime_content_type($image['tmp_name']);
        if (! in_array($mime_type, $allowed_file_types))
            $image['err_msg'][] = $image["safename"] . " is not one of the [jpg/jpeg/png] type";
        if ($image["size"] > 2 * 1024 * 1024)
            $image['err_msg'][] = $image["safename"] . " size in more than 2Mb";
        if ($image['error'] !== UPLOAD_ERR_OK)
            $image['err_msg'][] = "There is problem in uploading " . $image["safename"] . "! Please try again.";
    } else $image['err_msg'][] = $image["safename"] . " is corrupted or not existed!";
    if (!empty($image['err_msg'])) {
        showError($image['err_msg']);
    } else { //process
        move_uploaded_file($image['tmp_name'], $target_file);
        echo "<img src='" . htmlspecialchars($target_file) . "' style='max-width:300px;'><br>";
        echo htmlspecialchars($target_file) . "<br><br>";
    }
}
