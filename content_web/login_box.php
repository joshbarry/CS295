<div id="login_frame">
<h1 style="text-align:left;">Psych WebApp</h1>
<form action="<? print $_SERVER['PHP_SELF']; ?>" method="post" >
	<fieldset>
		<h1 style="text-align:center;">Login</h1>
			
		<label for="txtUserName">Username:</label><br />
		<input name="txtUserName" tabindex="210" type="text" size="30" id="txtUserName" <? print "value='$userName'"; ?>/><br />
	
		<label for="txtPassWord">Password:</label><br />
		<input name= "txtPassWord" tabindex="230" type="password" size="30" id="txtPassWord" <? print "value='$passWord'"; ?> /><br />
	
		<input type="submit" tabindex="300" name="cmdAuth" value="Login" style="display:block; margin: 10px auto;" />
	</fieldset>
</form>
</div>