<?php
    session_start();
    include_once("connection.php");
    if(ISSET($_POST['fixtureid'])){
        $_SESSION['fixtureid'] = $_POST['fixtureid'];
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

    <?php
            $stmt = $conn->prepare("SELECT * FROM TblPlayers 
                                    INNER JOIN TblTeamFixture ON TblPlayers.PlayerID = TblTeamFixture.PlayerID 
                                    WHERE TblTeamFixture.FixtureID = :fixtureid;");
            $stmt->bindParam(':fixtureid', $_SESSION["fixtureid"]);
            $stmt -> execute();
            // Selects the players on the teamsheet


            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo("
                    <div class = 'fixture_list'>
                    $row[Firstname] 
                    $row[Lastname]
                    <br>
                
                    <form action='recordstats.php' method = 'post' class = 'form'> 
                        <input type='hidden' name='playerid' value=$row[PlayerID]>
                        <button type='submit' class = 'adduser'>Record</button>
                    </form>

                    </div>    
                    ");
                }
                // Outputs the players with option to edit stats
                
            
        ?>


    
        <!-- Framework -->

        <a  href="home_fixture_coach.php"><button class = "pagebutton" style = "width: 50%; border-width: 0px;">Back</button></a>

        <button onclick = "oppscore()" class = "pagebutton" style = "width: 50%; border-width: 0px;" >Finish</button>
        <!-- The 'Finish' button carries out the funtion oppscore in javascript -->
        <form id="myForm" action="finishgame.php" method="POST"> 
            <input type="hidden" name="inputValue" id="inputValue"> 
        </form> 
        
        
        <script>
        function oppscore(){
        let userInput = prompt("Please enter opponent score: "); //A prompt appears to enter the score for the opponent
       
        document.getElementById('inputValue').value = userInput; 
        document.getElementById('myForm').submit(); //Takes the user input, puts it in a form and submits to finishgame.php for further action
        } 
    
        </script>
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