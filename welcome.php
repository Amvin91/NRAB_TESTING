<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		
		.navbar {
	  overflow: hidden;
	  background-color: #333; 
	}

	.navbar a {
	  float: left;
	  font-size: 16px;
	  color: white;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	}

	.subnav {
	  float: left;
	  overflow: hidden;
	}

	.subnav .subnavbtn {
	  font-size: 16px;  
	  border: none;
	  outline: none;
	  color: white;
	  padding: 14px 16px;
	  background-color: inherit;
	  font-family: inherit;
	  margin: 0;
	}

	.navbar a:hover, .subnav:hover .subnavbtn {
	  background-color: red;
	}

	.subnav-content {
	  display: none;
	  position: absolute;
	  left: 0;
	  background-color: red;
	  width: 100%;
	  z-index: 1;
	}

	.subnav-content a {
	  float: left;
	  color: white;
	  text-decoration: none;
	}

	.subnav-content a:hover {
	  background-color: #eee;
	  color: black;
	}

	.subnav:hover .subnav-content {
	  display: block;
	}

    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to NRAB.</h1>
    </div>
	
	<div class="navbar">
	  <a href="calendar.php">Calendar</a>
	  <a href="bookRoom.php">Book a room</a>
	  <a href="myAccount.php">My Account</a>
	</div>

	<div style="padding:0 16px">
	  
	</div

	<p>
        <a href="logout.php" class="btn btn-danger">Sign Out</a>
    </p>
</body>
</html>