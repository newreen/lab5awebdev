<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Nureen Haziqah Mohd Hairudin";
    $matricNumber = "AI220041";
    $course = "BIW";
    $yearOfStudy = "3";
    $address = "51, Jalan Tembikai 11 Taman Kota Masai, 81700 Pasir Gudang, Johor";
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Details</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
