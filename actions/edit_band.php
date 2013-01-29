<?php
// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values 
$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv','w');

// (2) write the new band's info to the file
fwrite($f,$data_string);

// (3) close the file
fclose($f);

$_SESSION['message'] = array(
	'text' => 'Your band has been edited.',
	'type' => 'info'
	);
// Redirect to homepage
header('Location:../');

?>