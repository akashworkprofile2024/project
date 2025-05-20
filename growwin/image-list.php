<?php
$folder = '../htdocs/gallery/';
$extensions = ['png','webp'];

$images = [];
foreach (scandir($folder) as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array(strtolower($ext), $extensions)) {
        $images[] = $folder . $file;
    }
}
echo json_encode($images);
?>
