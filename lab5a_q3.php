<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Example usage of the function
    $length = 10; // Length of the rectangle
    $width = 5;   // Width of the rectangle
    $area = calculateArea($length, $width);

    // Display the result in one line
    echo "The area of a rectangle with length $length and width $width is $area.";
    ?>
</body>
</html>
