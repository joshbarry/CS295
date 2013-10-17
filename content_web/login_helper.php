<?php
// Initialize instance variables
$userName = "";
$passWord = "";

if (isset($_POST["cmdAuth"])){
	// Set Variables equal to the text fields below 
    $userName = $_POST["txtUserName"];
	$passWord = $_POST["txtPassWord"];
    
	// Prepare the error array 
	$errorMsg=array();
	
	//---------------------------------------
	// Verify fields have correct information. 
	//
	if($userName==""){
        $errorMsg[]="Please enter a Username.";
    } //else {
        //$valid = verifyAlphaNum ($userName); /* test for non-valid  data */
        //if (!$valid){ 
            //$errorMsg[]="Invalid Username. Check for errors and try again.";
        //}
    //}
	
	if($passWord==""){
		$errorMsg[]="Please enter your Password.";
	} //else {
		//$valid = verifyPassword ($passWord);
		//if (!$valid){
			//$errorMsg[]="Invalid Password. Please try again.";
		//}
	//}
	
	//--------------------------------------------------------------------------------
	// If the Data is good, let's check the database for correct login credentials! 
	//
	//if (!$errorMsg) {
	
		/* Get the skID of the user */
		//$id = checkUserName($userName,$connectID);
		/* Get the row that contains the skID we found above */
		//$record = readMemberRecord($id,$connectID);
		/* Fetch the encrypted password for this skID */
		//$record_pw = mysql_result($record,0,'fldPassWord');
		/* If the submitted password matches the one on file for this user, Authenticate them. */
		//if ((md5($passWord))==($record_pw)) {
			/* Create a Session */
			//$_SESSION['user'] = $userName;
			/* Redirect them to the admin panel */
			//header ('Location: index.php');
		//} else {
			//$errorMsg[]="Invalid Password. Please try again.";
		//}
	//}
}
?>