<?php

    session_start();
    //Connect to the database
    include_once("connection.php");
    //For debugging - outputs all the entered values to make sure they are correct
    echo $_SESSION['fixtureid'];
    print_r($_POST);

?>  