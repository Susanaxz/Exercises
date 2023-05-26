<?php
// print to screen a string with extension and remove the text up to the point of the extension

$filename = 'php_strings.php';

echo $filename . '<br>';

// print to the screen up to the file extension

// echo substr($filename, 0, strpos($filename, '.')) . '<br>';; // 0 is the start position, strpos is the position of the first occurrence of a substring in a string

// print only the file extension without the dot

// echo substr($filename, strpos($filename, '.') + 1) . '<br>'; // +1 is the start position
$filename = 'php_strings.php';

$extension = substr($filename, strrpos($filename, '.') + 1); // Get the extension of a file

echo $extension . '<br>'; // Show file extension

echo "******************" . '<br>'. '<br>';

// ******************************************************** //

$name = "        María        del          Carmen        ";

echo $name . '<br>';

echo trim($name) . '<br>'; // Remove spaces from the beginning and end of a string

$format_name = trim($name); // Remove spaces from the beginning and end of a string

// while (strpos($format_name, '  ') !==false) { // Find the position of the first occurrence of a substring in a string
//     $format_name = str_replace('  ', ' ', $format_name); // Replace all occurrences of the search string with the replacement string
// }

$format_name = preg_replace('/\s+/', ' ', $format_name); // Replace multiple spaces with a single space


echo "<pre>$format_name</pre>" . '<br>';

?>