<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php
    // Associative array of students with name, course, and age
    $students = [
        "Alice" => ["course" => "BIP", "age" => 21],
        "Bob" => ["course" => "BIS", "age" => 20],
        "Raju" => ["course" => "BIT", "age" => 22]
    ];
    ?>
    <!-- Displaying the students array in an HTML table -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Age</th>
        </tr>
        <?php
        foreach ($students as $name => $details) {
            echo "<tr>
                    <td>$name</td>
                    <td>{$details['course']}</td>
                    <td>{$details['age']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
