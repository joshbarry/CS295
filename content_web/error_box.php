<div id="error_box">
<div id="closeError" style="margin:-0.8em; float:right;">
	<a href="#">
		<img src="./img/btn_close.png" />
	</a>
</div>
<?php
/* If there are errors, display them here. */
if($errors != "") {
	echo "<p>ERROR_001: Content Not found!</p>";
} else if($errorMsg){
	echo "<p style='text-align:center;'><b>Authentication Failed!</b></p><ul><b>\n";
	foreach($errorMsg as $err){
		echo "<li style='color: #FF0000'>" . $err . "</li>\n";
	}
	echo "</b></ul>\n";
}
?>
</div>