<?php
	foreach(glob('images/*/*.jpg', GLOB_BRACE) as $image) {

//	echo "Filename: " . $image . "<br />";

	$exif = exif_read_data($image, 0, true);
	echo '<img src="'.$image.'" style="height: 25%"><br />';
		
		foreach ($exif as $key => $section) {
			foreach ($section as $name => $val) {
				echo "$key.$name: $val<br />\n";
			}
		}

	}
?>