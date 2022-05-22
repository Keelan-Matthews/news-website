<?php
    if(isset($_POST['submit'])) {
        //Connect to database
        require_once 'config.php';

        //get form data
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (emptyName($name) !== false) {
            header('Location: ../signup.php?error=emptyname');
            exit();
        }

        if (invalidName($name) !== false) {
            header('Location: ../signup.php?error=invalidname');
            exit();
        }

        if (emptySurname($surname) !== false) {
            header('Location: ../signup.php?error=emptysurname');
            exit();
        }

        if (invalidSurname($surname) !== false) {
            header('Location: ../signup.php?error=invalidsurname');
            exit();
        }

        if (emptyEmail($email) !== false) {
            header('Location: ../signup.php?error=emptyemail');
            exit();
        }

        if (invalidEmail($email) !== false) {
            header('Location: ../signup.php?error=invalidemail');
            exit();
        }

        if (emptyPassword($password) !== false) {
            header('Location: ../signup.php?error=emptypassword');
            exit();
        }

        if (invalidPassword($password) !== false) {
            header('Location: ../signup.php?error=invalidpassword');
            exit();
        }

        $instance = Database::instance();
        $conn = $instance->conn;

        if (emailExists($conn, $email) !== false) {
            header('Location: ../signup.php?error=emailexists');
            exit();
        }

        $instance->addUser($name, $surname, $email, $password);

    } else {
        header("location: ../signup.php?error=notsubmitted");
        exit();
    }
?>