<?php
    header('Location: create_fixture.php');
    //Connect to the database
    include_once("connection.php");

    $stmt = $conn->prepare("INSERT INTO TblFixtures
    (FixtureID, Opponent, Date, Time, Location, HA, Type)VALUES
    (null,:opp,:date,:time,:loc,:ha,:type)");
// The program runs the SQL code inside the brackets on the database, which inserts into the fields
// on TblPlayers the values the user just entered
    $stmt->bindParam(':opp', $_POST["opponent"]);
    $stmt->bindParam(':date', $_POST["date"]);
    $stmt->bindParam(':time', $_POST["time"]);
    $stmt->bindParam(':loc', $_POST["location"]);
    $stmt->bindParam(':ha', $_POST["h/a"]);
    $stmt->bindParam(':type', $_POST["type"]);
    $stmt->execute();
    $conn=null;
?>  