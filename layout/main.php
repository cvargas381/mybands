<?php
// Display message if there is one in session data
if(isset($_SESSION['message'])) {
	// Display message

	// Remove message from session
}
// Store the 'p' paramater from the QS into a variable

if(isset($_GET['p'])) {
	$p = $_GET['p'];	
} else {
	$p = 'list_bands';
}


include("views/$p.php");