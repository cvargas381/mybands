<?php
session_start();
// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
unset($lines[$_GET['linenum']]);

// Create the string to write to the file
$data_string = implode("\n",$band);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv','w');

// (2) write the new band's info to the file
fwrite($f,$data_string);

// (3) close the file
fclose($f);
// Redirect to homepage
header('Location:../');
?>