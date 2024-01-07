<?php
require_once "Database.php";

class User extends Database {

    public function register($firstname, $lastname, $username, $password) {
        // Check if a user with the given first and last name already exists
        $existingUser = $this->checkExistingUser($firstname, $lastname);

        if (!$existingUser) {
            $sql = "INSERT INTO users (firstname, lastname, username, password)
                    VALUES ('$firstname', '$lastname', '$username', '$password')";

            if ($this->conn->query($sql)) {
                header("location: ../views");
                exit;
            } else {
                die("Error in Registering: " . $this->conn->error);
            }
        } else {
            // Handle case where the user already exists
            echo "User with the same name already registered.";
            // You might want to redirect or display an error message
        }
    }

    // Helper function to check if a user with the given first and last name already exists
    private function checkExistingUser($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE firstname = '$firstname' AND lastname = '$lastname'";
        $result = $this->conn->query($sql);

        return ($result->num_rows > 0);
    }
    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password'])){
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Your password is incorrect");
            }

        }else{
            die("Username not found");
        }
    }
  }
?>