<h1 style="text-align:center;">Psych WebApp</h1>
<div id="login_frame">
<form action="<? echo  htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	<fieldset>
		<h1 style="text-align:center;">Login</h1>
			
		<label for="txtUserName">Username:</label><br />
		<input style="width:100%;" name="txtUserName" tabindex="210" type="text" size="30" id="txtUserName" <? echo "value='$userName'"; ?>/><br />
	
		<label for="txtPassWord">Password:</label><br />
		<input style="width:100%;" name= "txtPassWord" tabindex="230" type="password" size="30" id="txtPassWord" <? echo "value='$passWord'"; ?> /><br />
	
		<input type="submit" tabindex="300" name="cmdAuth" value="Login" style="display:block; margin: 10px auto;" />
	</fieldset>
</form>
</div>