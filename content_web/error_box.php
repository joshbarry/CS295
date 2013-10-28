<div id="error_box">
<?php
/* If there are errors, display them here. */
if($errors != "") {
	echo "<p>ERROR_305: Content Not found!</p>";
} else if($errorMsg){
	echo "<fieldset class='errors'><p style='color: #FF0000'><b>Login failed.</b></p><ul><b>\n";
	foreach($errorMsg as $err){
		echo "<li style='color: #FF0000'>" . $err . "</li>\n";
	}
	echo "</b></ul></fieldset>\n";
}
?>
</div>