<!-- check registreren-->
<?php
session_start();
require('Login.php');
require_once ('databaseFunctions.php');       

    if(isset($_POST['login']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];

        $query = "INSERT INTO users(firstName, lastName, email, password, phoneNumber) VALUES('$firstName', '$lastName', '$email', '$password', '$phoneNumber')";
        
        $result = execute_query($query);
        echo "<br>";
        if ($result)
        {
            echo "<br><p class = wit>Account is aangemaakt!!<p/>";
        }

    }

?>