<?php

$path = '/htdoc/classwork/tutorial19.php';
$file = 'tutorial19s.php';
// Return filename
echo basename($path)."<br>";

// Return filename without extension

echo basename($path, ".php")."<br>";

//Return the dir name from the path

echo dirname($path)."<br>";

//Check if the file exists
// It can also be used for folders
echo file_exists($file)."<br>"; 

// Get absolute path

echo realpath($file)."<br>";

// Check to see if the file is a file

echo is_file($file)."<br>";

// Check if writable

echo is_writable($file)."<br>";

// Check if readable

echo is_readable($file)."<br>";

// Get file size

echo filesize($file)."<br>";

// Create a directory

echo mkdir('tutorial19ss');

// Delete a directory if empty

echo rmdir('tutorial19ss');

// Copy file

echo copy('index.php', 'index3.php');

// rename file

echo rename('index3.php', 'tutorial19ss.php');

// Delete file
unlink('tutorial19ss.php');

// Write from file to string
echo file_get_contents($file);

// Write a string to file
echo file_put_contents($file, "Hello People")."<br>";

//
$current = file_get_contents($file);

$current .= 'Hello Hello';

file_put_contents($file, $current)."<br>"; 

// open file for reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;

//open file for writing

$handle = fopen($file, 'w');
$txt = 'Siyuan';
fwrite($handle, $txt);
$txt = "Ruan";
fwrite($handle, $txt);
fclose($handle);