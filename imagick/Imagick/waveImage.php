<?php
$imagick = new Imagick(realpath("../images/TestImage.jpg"));

$imagick->waveImage(4, 25);

header("Content-Type: image/jpg");
echo $imagick->getImageBlob();