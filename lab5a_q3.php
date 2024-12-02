<?php
// Define the function to calculate the area of a rectangle
function calculateArea($width, $height) {
    return $width * $height;
}

// Call the function with example values
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

// Display the result
echo "The area of a rectangle with a width of $width and $height is $area";
?>