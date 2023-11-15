<?php

class img_class
{
    public function resize_image_crop($original_image_path, $cropped_image_path, $width, $height, $where = "mid")
    {
        $extension = explode(".", $original_image_path);
        $extension = end($extension);

        if (strtoLower($extension)  == "jpg") {
            @$image = imagecreatefromjpeg($original_image_path);
        } else if (strtoLower($extension) == "jpeg") {
            @$image = imagecreatefromjpeg($original_image_path);
        } else if (strtoLower($extension) == "png") {
            @$image = imagecreatefrompng($original_image_path);
        } else if (strtoLower($extension) == "gif") {
            @$image = imagecreatefromgif($original_image_path);
        } else {
            $extension = "jpg";
            $image = imagecreatefromjpeg($original_image_path);
        }

        $orientation = 0;

        if ((strtoLower($extension) == "jpg") || (strtoLower($extension)) == "jpeg") {
            @$exif = exif_read_data($original_image_path);

            if (isset($exif['Orientation'])) {
                $a = $exif['Orientation'];

                if ($a == 3) {
                    $orientation = 180;
                } else if ($a == 5) {
                    $orientation = -90;
                } else if ($a == 6) {
                    $orientation = -90;
                } else if ($a == 7) {
                    $orientation = -90;
                } else if ($a == 8) {
                    $orientation = 90;
                }
            }

            $w = @imagesx($image);
            $h = @imagesy($image);
            if ((!$w) || (!$h)) {
                $GLOBALS['error'][] = 'Image couldn\'t be resize because it was\'t a valit image';
            } else if (($w == $width) && ($h == $height)) {
                $new_w = $w;
                $new_h = $h;
            } else {
                $ratio = $width / $w;
                $new_w = $width;
                $new_h = $h * $ratio;

                if ($new_h < $height) {
                    $ratio = $height / $h;
                    $new_h = $height;
                    $new_w = $w * $ratio;
                }
            }

            $image2 = imagecreatetruecolor($new_w, $new_h);
            imagecopyresampled($image2, $image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);

            if (($new_h != $height) || ($new_w != $width)) {
                $image3 = imagecreatetruecolor($width, $height);
                if($new_h > $height){
                    $extra = $new_h - $height;
                    $x = 0;
                    if($where == "top"){
                        $y = 0;
                    }
                }
            }
        }
    }
}
