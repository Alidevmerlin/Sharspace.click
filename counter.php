<?php
$file = __DIR__ . "/counter.txt";
$startValue = 100000;

// Create the file if it doesn't exist or is empty
if (!file_exists($file) || filesize($file) == 0) {
    file_put_contents($file, $startValue);
    chmod($file, 0664); // ensure PHP can write
}

// Read current count
$count = (int)file_get_contents($file);

// Increment count
$count++;

// Save updated count back to file
file_put_contents($file, $count);

// Output the count
echo $count;
?>
