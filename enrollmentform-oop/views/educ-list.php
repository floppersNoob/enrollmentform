<?php
include_once('../classes/Student.php');

$student = new Student();

$educStudents = $student->displaySpecificStudent('EDUC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSIT Enrollees</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h1 {
            text-align: center;
        }

        /* Style for Back to Homepage Button */
        button {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: teal;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50px;
            transition: background-color 0.5s;
        }

        button:hover {
            background-color: #2B7A2A;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>

<h1>List of Enrollees in BS Education</h1>

<?php if (!empty($educStudents)) : ?>

<!-- Display the list of BSIT students in a table -->
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Gender</th>
        <th>Year Level</th>
        <th>Course</th>
    </tr>
    <?php foreach ($educStudents as $student) : ?>
        <tr>
            <td><?= $student['firstname']; ?></td>
            <td><?= $student['lastname']; ?></td>
            <td><?= $student['age']; ?></td>
            <td><?= $student['bod']; ?></td>
            <td><?= $student['address']; ?></td>
            <td><?= $student['contactNum']; ?></td>
            <td><?= $student['gender']; ?></td>
            <td><?= $student['yrLevel']; ?></td>
            <td><?= $student['course']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else : ?>
    <p>No EDUC students found.</p>
<?php endif; ?>

<!-- Back to Homepage Button -->
<button onclick="backToHomepage()" title="Back to Homepage">Back to Homepage</button>

<script>
    // Function to navigate back to homepage
    function backToHomepage() {
        window.location.href = 'admin-dashboard.php';
    }
</script>

</body>
</html>
