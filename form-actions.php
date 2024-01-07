<?php

include_once('../classes/Student.php');

// Handle actions related to student enrollment
if (isset($_POST['submit'])) {
    // Create an instance of the Student class
    $student = new Student();

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $bod = $_POST['bod'];
    $address = $_POST['address'];
    $contactNum = $_POST['contactNum'];
    $gender = $_POST['gender'];
    $yrLevel = $_POST['yrLevel'];
    $course = $_POST['course'];


    // Call the method to enroll the student
    $student->enrollStudent($fname, $lname, $age, $bod, $address, $contactNum, $gender, $yrLevel, $course);

    // Redirect or display success message
    header("Location:../views/confirm.php");
    exit();
}

?>
