<?php
    session_start();
    
    header('Location: ../recordstats.php');
    //Connect to the database
    include_once("../connection.php");
    echo $_POST['playerid'];

    //For debugging - outputs all the entered values to make sure they are correct


    $stmt = $conn->prepare("UPDATE TblTeamFixture
    SET FGA = FGA + 1, FGM = FGM + 1, 3PA = 3PA + 1, 3PM = 3PM + 1, Points = Points + 3 
    WHERE PlayerID = :playerid AND FixtureID = :fixtureid");

    $stmt->bindParam(':playerid', $_POST['playerid']);
    $stmt->bindParam(':fixtureid', $_SESSION['fixtureid']);
    $stmt->execute();
    $conn=null;
?>