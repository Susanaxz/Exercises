<?php

// import csv file
// open file for reading

$filename = 'Section.csv';

$fp = fopen($filename, 'r');

// create an array to store the data
$records = array();


// read the line with fgets():
while (($line = fgets($fp)) !== false) {
    $line = rtrim($line, "\r\n"); // remove end of line characters

    // Separate the fields by commas using explode()
    $fields = explode(';', $line);

    // Add the fields to the array $records
    $records[] = $fields;

}

// close the file
fclose($fp);

// create HTML table
echo '<link rel="stylesheet" type="text/css" href="css/styles.css">';

echo '<div class="table-container">';
echo '<table>';
echo '<tr>';
foreach ($records[0] as $header) {
    echo '<th>' . $header . '</th>';
}
echo '</tr>';

for ($i = 1; $i < count($records); $i++) {
    echo '<tr>';
    foreach ($records[$i] as $field) {
        echo '<td>' . $field . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
echo '</div>';

?>