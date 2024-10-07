<?php
    header('Location: create_admin.php');
    //Connect to the database
    include_once("connection.php");
    //For debugging - outputs all the entered values to make sure they are correct
    echo $_POST["firstname"]."<br>";
    echo $_POST["lastname"]."<br>";
    echo $_POST["position"]."<br>";
    echo $_POST["height"]."<br>";
    echo $_POST["weight"]."<br>";
    echo $_POST["year"]."<br>";
    echo $_POST["house"]."<br>";
    echo $_POST["username"]."<br>";
    echo $_POST["password"]."<br>";


    $stmt = $conn->prepare("INSERT INTO TblAdmin
    (AdminID, Username, Password)VALUES
    (null,:username,:password)");

    $stmt->bindParam(':username', $_POST["username"]);
    $stmt->bindParam(':password', $_POST["password"]);
    $stmt->execute();
    $conn=null;
?>  