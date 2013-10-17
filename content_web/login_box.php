<div id="login_frame">
<?php
/* If there are errors, display them here. */
if($errorMsg){
	echo "<fieldset class='errors'><p style='color: #FF0000'><b>Login failed.</b></p><ul><b>\n";
	foreach($errorMsg as $err){
		echo "<li style='color: #FF0000'>" . $err . "</li>\n";
	}
	echo "</b></ul></fieldset>\n";
}
?>
<form action="<? print $_SERVER['PHP_SELF']; ?>" method="post" style="margin-left:300px; margin-right:300px;">
	<fieldset>
		<h1>Authentication</h1>
			
		<label for="txtUserName">Username:</label><br />
		<input name="txtUserName" tabindex="210" type="text" size="30" id="txtUserName" <? print "value='$userName'"; ?>/><br />
	
		<label for="txtPassWord">Password:</label><br />
		<input name= "txtPassWord" tabindex="230" type="password" size="30" id="txtPassWord" <? print "value='$passWord'"; ?> /><br />
	
		<input type="submit" tabindex="300" name="cmdAuth" value="Login" style="display:block; margin: 10px auto;" />
	</fieldset>
</form>
</div>