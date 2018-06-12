<?php
	if (class_exists( 'SoapClient' ) ) {
		echo 'SoapClient Exists.';
	}else{
		echo 'SoapClient NOT Exists.';
	}
	echo '<br><Br>';
	echo "File Code is:<br>
		if (class_exists( 'SoapClient' ) ) {<br>
			echo 'SoapClient Exists.';<br>
		}else{<br>
			echo 'SoapClient NOT Exists.';<br>
		}<br>
	";
	die();
	?>