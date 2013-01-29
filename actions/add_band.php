<?php session_start() ?>
<?php
// validate that each piece of info was provided
if($_POST['band_name'] != '' && $_POST['band_genre'] != '' && $_POST['band_numalbums'] != '') {

	// Add this band to the CSV File
	// (1) open the file for writing
	$f = fopen('../data/bands.csv','a');

	// (2) write the new band's info to the file
	fwrite($f,"\n{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}");

	// (3) close the file
	fclose($f);
	// Redirect to homepage
	header('Location:../');
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;

	// Store message 	
	$_SESSION['message'] = '<div class="alert alert-error">Please enter all required information</div>';

	// Redirect to the form
	header('Location:../?p=form_add_band');
}