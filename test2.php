<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<p> test page</p>

<?php
$directory = 'assets/img/portfolio/SpotLight/';
$directories = glob($directory . '*', GLOB_ONLYDIR);
$images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if (count($images) > 0) {
    echo '<h2>Images:</h2>';
    echo '<div class="gallery">';
    foreach ($images as $image) {
        echo '<img src="' . $image . '" alt="' . basename($image) . '">';
    }
    echo '</div>';
} else {
    echo '<p>No images found in the gallery.</p>';
}
?>

</body>
</html>

</body>
</html>
