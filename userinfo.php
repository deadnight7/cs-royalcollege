<?php

$email = "dead.night7@gmail.com";
$default = "http://cs-royalcollege.net76.net/";
$size = 270;
$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

?>

<img src="<?php echo $grav_url; ?>" alt="" />