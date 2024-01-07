<?php

require_once "Database.php";

class Student extends Database {

    public function enrollStudent($fname, $lname, $age, $bod, $address, $contactNum, $gender, $yrLevel, $course) {
        // Check if the student already exists based on first name and last name
        $existingStudent = $this->checkExistingStudent($fname, $lname);

        if (!$existingStudent) {
            $sql = "INSERT INTO students (firstname, lastname, age, bod, address, contactNum, gender, yrLevel, course) 
                    VALUES ('$fname', '$lname', $age, '$bod', '$address', '$contactNum', '$gender', '$yrLevel', '$course')";

            if ($this->conn->query($sql)) {
                header("location: ../views/dashboard.php");
                exit;
            } else {
                die("Error in Enrolling Student: " . $this->conn->error);
            }
    }
}
    // Helper function to check if a student with the given first and last name already exists
    private function checkExistingStudent($fname, $lname) {
        $sql = "SELECT * FROM students WHERE firstname = '$fname' AND lastname = '$lname'";
        $result = $this->conn->query($sql);

        return ($result->num_rows > 0);
    }

    public function displaySpecificStudent($course) {
        $sql = "SELECT * FROM students WHERE course = '$course' ORDER BY yrLevel";
                
        if ($result = $this->conn->query($sql)) {
            while ($student = $result->fetch_assoc()) {
                $students[] = $student;
            }
            return $students = [];
        } else {
            die("Error in retrieving students: " . $this->conn->error);
        }
    }
}
?>
