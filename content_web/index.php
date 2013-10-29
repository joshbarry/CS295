<?php 
// Grab session information
include("session.php");
// Database information
//include("db.php");
//include("tcpcon.inc");
// Functions and Helpers
//include("funcs.php");
// Include login_helper if the session does not already exist ..
if ($_SESSION['user']=="") { include("login_helper.php"); }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title>WebApp Title - Portal</title>

   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="author" content="Tyler Sawyer" />
   <meta name="description" content="WEBAPP_TITLE_PORTAL_HERE" />

   <link rel="stylesheet" href="styleMain.css" type="text/css" media="screen" />
   

</head>
<body>
<img id="background" src="./img/webapp_bck.png" />
<div id="content">
<div id="title_wrap">
<?php /* Include LoginHelper if no session found */ if ($_SESSION['user']=="") { include("login_box.php"); } ?>
<?php /* Include Errors Here (if any) */ if ($errors != "" || $errorMsg) { include("error_box.php"); } ?>
</div>
</div>
</body>