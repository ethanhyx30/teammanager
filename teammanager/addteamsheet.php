<?php
    header('Location: select_teamsheet.php');
    session_start();
    //Connect to the database
    include_once("connection.php");
    //For debugging - outputs all the entered values to make sure they are correct
    echo $_SESSION['fixtureid'];
    echo $_POST["fixtureid"]."<br>";
    echo $_POST["playerid"]."<br>";
 
    $stmt = $conn->prepare("INSERT INTO TblTeamFixture (FixtureID, PlayerID)
    VALUES (:fixtureid, :playerid)");

    $stmt->bindParam(':fixtureid', $_POST["fixtureid"]);
    $stmt->bindParam(':playerid', $_POST["playerid"]);
    $stmt->execute();
    $conn=null;
?>  