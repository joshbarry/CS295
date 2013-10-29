<div id="error_box">
<?php
/* If there are errors, display them here. */
if($errors != "") {
	echo "<p>ERROR_001: Content Not found!</p>";
} else if($errorMsg){
	echo "<p><b>Login failed.</b></p><ul><b>\n";
	foreach($errorMsg as $err){
		echo "<li style='color: #FF0000'>" . $err . "</li>\n";
	}
	echo "</b></ul>\n";
}
?>
</div>