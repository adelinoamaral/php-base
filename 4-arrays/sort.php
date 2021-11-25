<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorting Multidimensional Arrays</title>
</head>
<body>
    <?php

    /*	This page creates a multidimensional array of names and grades.
     *	The array is then sorted twice:
     *	once by name and once by grade.
     */

    // Create the multidimensional array:
    // studentID => array ('name' => 'Name', 'grade' => XX.X)
    $students = array (
                    256 => array ('name' => 'Jon', 'grade' => 98.5),
                    2 => array ('name' => 'Vance', 'grade' => 85.1),
                    9 => array ('name' => 'Stephen', 'grade' => 94.0),
                    364 => array ('name' => 'Steve', 'grade' => 85.1),
                    68 => array ('name' => 'Rob', 'grade' => 74.6)
                );

    // Name sorting function:
    function name_sort ($x, $y) {
        // strcasecmp() - Compare two strings (case-insensitive)
        return strcasecmp($x['name'], $y['name']);
    }

    // Grade sorting function:
    // Sort in DESCENDING order!
    function grade_sort ($x, $y) {
        return ($x['grade'] < $y['grade']);
    }

    // Print the array as is:
    echo '<h3>Array As Is</h3><pre>' . print_r($students, 1) . '</pre>';

    // Sort by name:
    uasort ($students, 'name_sort');

    // Print the array now:
    echo '<h3>Array Sorted By Name</h3><pre>' . print_r($students, 1) . '</pre>';

    // Sort by grade:
    uasort ($students, 'grade_sort');

    // Print the array now:
    echo '<h3>Array Sorted By Grade</h3><pre>' . print_r($students, 1) . '</pre>';

    ?>
    
</body>
</html>
