<?php 
//--------------------------------------
// Session Interpretator 
// Tyler J. Sawyer
// 12:29 on October 17, 2013 (Thursday)
//--------------------------------------
//
/* Start our session, assuming the user is logged in. */
session_start();
/* If the user clicked logout, send them to the login splash page and destroy the session. */
if ($_GET['logout'] && $_SESSION['user']!="") {
	session_destroy();
	header ('Location: index.php');
}
?>