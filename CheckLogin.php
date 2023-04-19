<!-- Check gebruiker -->
<?php
session_start();
require_once ('databaseFunctions.php'); 

if(isset($_POST['login'])){
    $sql = "SELECT * FROM users WHERE email='" . $_POST['email'] . "'
    AND password='" . $_POST['password'] . "'";
    $result = execute_query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_array();

        $_SESSION['user'] = $row;
        header("location: index.php");
    } else {
        echo "0 results";
        header("location: login.php");
    }


}
?>