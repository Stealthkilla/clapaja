<?php
header('Content-Type: application/json; charset=utf8');
$images = array();
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "images.php" && $entry != "..") {
            $images[] = array("imageUrl" => $entry);
        }
    }
    closedir($handle);
}

echo json_encode($images);

?>