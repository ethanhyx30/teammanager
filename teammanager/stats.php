<?php
    include_once("connection.php");
    echo $_POST["fixtureid"]
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Player</title>
    <meta charset = "utf-8">
    <meta name="viewport" content = "width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <!-- Team Logo -->
    <div class = "top"> 
        TEAM MANAGER
    </div>
    <!-- Four buttons, linking to corresponding pages -->
    <div class = "container"> 

    <?php
            $stmt = $conn->prepare("SELECT * FROM TblPlayers 
                                    INNER JOIN TblTeamFixture ON TblPlayers.PlayerID = TblTeamFixture.PlayerID 
                                    WHERE TblTeamFixture.FixtureID = :fixtureid;");
            $stmt->bindParam(':fixtureid', $_POST["fixtureid"]);
            $stmt -> execute();


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo("
                    <div class = 'fixture_list'>
                    $row[Firstname] 
                    $row[Lastname]
                    <br></div>    
                    ");
                }
                
            
        ?>


    
        <!-- Framework -->

        <a class = "pagebutton" style = "width: 100%" href="home_fixture_coach.php">Back</a>

    </div>    
    <!-- Bottom of the page containing contact information -->
    <div class = "bottom">
        Made by Ethan He
    </div>
</body>
<style>
    .bg{
        background-image: url('homepagecoach/1.jpeg');

    }
    .create{
        background-color: white;
        margin-left: 250px;
        margin-right: 250px;
        box-shadow: 0 0 5px 5px black;
    }
</style>
</html>