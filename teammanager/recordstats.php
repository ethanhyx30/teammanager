<?php
    session_start();
    include_once("connection.php");
    if(ISSET($_POST['playerid'])){
        $_SESSION['playerid'] = $_POST['playerid'];
    }
    echo $_SESSION['playerid'];

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
        <!-- Displays player stats -->
        <div style = "width: 50%; text-align: center; height: 500px; float: left; overflow:auto">
        <?php
            $stmt = $conn->prepare("SELECT * FROM TblTeamFixture 
                                    WHERE FixtureID = :fixtureid AND PlayerID = :playerid;");
            $stmt->bindParam(':fixtureid', $_SESSION["fixtureid"]);
            $stmt->bindParam(':playerid', $_SESSION["playerid"]);
            $stmt -> execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            // Selects the record of the specific player in that specific fixture

            $stmt2 = $conn->prepare("SELECT * FROM TblPlayers 
                                    WHERE PlayerID = :playerid;");
            $stmt2->bindParam(':playerid', $_SESSION["playerid"]);
            $stmt2 -> execute();
            $name = $stmt2->fetch(PDO::FETCH_ASSOC);
            // Get the player name

            

            echo("<h1 class = 'title'>$name[Firstname] $name[Lastname] <br></h1>");
            // Print out stats
            echo('Points: '.$row['Points'].'<br>'); 
            echo('Rebounds: '.$row['Rebounds'].', '.$row['DRB'].' Defensive and '.$row['ORB'].' Offensive'.'<br>');
            echo('Assists: '.$row['Assists'].'<br>');
            echo('Steals: '.$row['Steals'].'<br>');
            echo('Blocks: '.$row['Blocks'].'<br>');
            if ($row['FGA'] != 0){
                $fg = round((($row['FGM']/$row['FGA'])*100), 2);
            }
            else{
                $fg = 0;
            }
            if ($row['FTA'] != 0){
                $ft = round((($row['FTM']/$row['FTA'])*100), 2);
            }
            else{
                $ft = 0;
            }
            if ($row['3PA'] != 0){
                $tp = round((($row['3PM']/$row['3PA'])*100), 2);
            }
            else{
                $tp = 0;
            }
            
            echo('Field Goals: '.$row['FGM'].'/'.$row['FGA'].' Efficiency: '.$fg.'%'.'<br>');
            echo('Free Throws: '.$row['FTM'].'/'.$row['FTA'].' Efficiency: '.$ft.'%'.'<br>');
            echo('Three-pointers: '.$row['3PM'].'/'.$row['3PA'].' Efficiency: '.$tp.'%'.'<br>');
            echo('Turnovers: '.$row['Turnovers'].'<br>');
            echo('Fouls: '.$row['Fouls'].'<br>');
            echo('Ejected: '.$row['Ejection'].'<br>');

            $gmsc = $row['Points'] + 0.4*$row['FGM'] - 0.7*$row['FGA'] - 0.4*($row['FTA']-$row['FTM']) + 0.7*$row['ORB'] 
            + 0.3*$row['DRB'] + $row['Steals'] + 0.7*$row['Assists'] + 0.7*$row['Blocks'] - 0.4*$row['Fouls'] - $row['Turnovers'];
            echo('Game Score: '.$gmsc);

        ?>
        </div>
        <!-- Actions to change stats -->
        <div style = "width: 50%; text-align: center; height: 500px; float: left; overflow:auto">
    
            <h1 class = 'title'>Actions</h1>
            <?php
            echo("
            <form action='statsactions/make2.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Make 2</button>
            </form>

            <form action='statsactions/make3.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Make 3</button>
            </form>

            <form action='statsactions/miss2.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Miss 2</button>
            </form>

            <form action='statsactions/miss3.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Miss 3</button>
            </form>
            
            <form action='statsactions/makeft.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Make FT</button>
            </form>
            
            <form action='statsactions/missft.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Miss FT</button>
            </form>

            <form action='statsactions/assist.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Assist</button>
            </form>

            <form action='statsactions/rebound_o.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Offensive Rebound</button>
            </form>

            <form action='statsactions/rebound_d.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Defensive Rebound</button>
            </form>

            <form action='statsactions/steal.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Steal</button>
            </form>

            <form action='statsactions/block.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Block</button>
            </form>

            <form action='statsactions/turnover.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Turnover</button>
            </form>

            <form action='statsactions/foul.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Foul</button>
            </form>

            <form action='statsactions/ejection.php' method = 'post' class = 'form'> 
                <input type='hidden' name='playerid' value= $_SESSION[playerid]>
                <button type='submit' class = 'adduser'>Ejection</button>
            </form>
            
            
            ");
            ?>


    
        </div>

    
        <!-- Framework -->

        <a class = "pagebutton" style = "width: 100%" href="stats.php">Back</a>

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
    .adduser{
        margin:0;
        padding:5px;
    }
</style>
</html>