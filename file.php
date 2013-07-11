<html>
<?php
        $email = "someone@someone.com";// your gmail
  	$default = "http://en.gravatar.com/userimage/57896534/d81242696efc5614558714138e.jpg";//your default image url address
	$size =200;//size of your image
	$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
?>
	
	<img src="<?php echo $grav_url; ?>" alt="" />

</html>
