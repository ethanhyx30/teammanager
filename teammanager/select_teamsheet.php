<?php
    session_start();
    
    if(ISSET($_POST['fixtureid'])){
        $_SESSION['fixtureid'] = $_POST['fixtureid'];
    }
    //Let SESSION take value of POST only if POST has a value
    echo $_SESSION['fixtureid'];
    // echo $_POST["fixtureid"];
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
    <div class = "container"> 
  
        <!-- Players to choose from -->
        <div style = "width: 50%; text-align: center; height: 500px; float: left; overflow:auto">

        <?php
            include_once("connection.php");
            $stmt = $conn->prepare("SELECT * FROM TblPlayers WHERE Status = 0;");
            $stmt -> execute();
            

            while ($player = $stmt->fetch(PDO::FETCH_ASSOC)){
                $appear = 0;
                $stmt2 = $conn->prepare("SELECT * FROM TblTeamFixture WHERE FixtureID = :fixtureid;");
                $stmt2->bindParam(':fixtureid', $_SESSION["fixtureid"]);   
                $stmt2 -> execute();
                while ($fixture = $stmt2->fetch(PDO::FETCH_ASSOC)){                  
                    if ($player['PlayerID'] == $fixture['PlayerID']){
                        $appear = 1;
                    }
                }
                if ($appear == 0){
                    echo("
                    <div class = 'fixture_list'>
                    $player[Firstname] 
                    $player[Lastname],
                    <br>Position: $player[Position]<br>
                    <form action='addteamsheet.php' method = 'post' class = 'form'> 
                        <input type='hidden' name='fixtureid' value=$_SESSION[fixtureid]>
                        <input type='hidden' name='playerid' value=$player[PlayerID]>
                        <button type='submit' class = 'adduser'>Add</button>
                    </form>
                    <br></div>    
                    ");
                }
                
            }

            // $player = $stmt->fetch(PDO::FETCH_ASSOC);
            // $fixture = $stmt2->fetch(PDO::FETCH_ASSOC);
            // foreach ($player as $p){
            //     $appear = 0;
            //     echo("$p[PlayerID]<br>");
            //     foreach ($fixture as $f){
            //         echo("$appear, $f[PlayerID] + $f[FixtureID]<br>");
                    
            //         if ($p['PlayerID'] = $f['PlayerID']){
            //             $appear = 1;
            //         }
            //     }
            //     if ($appear == 0){
            //         echo("
            //         <div class = 'fixture_list'>
            //         $player[Firstname] 
            //         $player[Lastname],
            //         <br>Position: $player[Position]
            //         <br></div>    
            //         ");
            //     }
            // }

        ?>

        </div>



        <div style = "width: 50%; text-align: center; height: 500px; float: left; overflow:auto">
    
            
        <?php
            include_once('connection.php');
            // Connects to the database
            $stmt = $conn->prepare("SELECT * FROM TblPlayers JOIN TblTeamFixture ON TblPlayers.PlayerID = TblTeamFixture.PlayerID WHERE TblTeamFixture.FixtureID = :fixtureid;");
            $stmt->bindParam(':fixtureid', $_SESSION["fixtureid"]);    
            $stmt-> execute();
            // Selects all players that are already on the team sheet for that match

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo("
                <div class = 'fixture_list'>
                $row[Firstname] 
                $row[Lastname],
                <br>Position: $row[Position]
                <br>    
                <form action='removeteamsheet.php' method = 'post' class = 'form'> 
                    <input type='hidden' name='fixtureid' value=$_SESSION[fixtureid]>
                    <input type='hidden' name='playerid' value=$row[PlayerID]>
                    <button type='submit' class = 'adduser'>Remove</button>
                    </form><br>
                </div>
                ");
            }
            // Displays all selected blayers and the option to remove them
            
        ?>

        </div>

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