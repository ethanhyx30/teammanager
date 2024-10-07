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
            include_once('connection.php');
            // Connects to the database
            $stmt = $conn->prepare("SELECT * FROM TblFixtures ORDER BY DATE");
            $stmt-> execute();
            // Some php code is used to select all fixtures from the database

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                if(empty($row['T_score'])){
                    echo("
                    <div class = 'fixture_list'>
                    $row[HA] against $row[Opponent], at $row[Location], <br>
                    $row[Date]
                    $row[Time]
                    <br>    

                    <form action='select_teamsheet.php' method = 'post' class = 'form'> 
                        <input type='hidden' name='fixtureid' value=$row[FixtureID]>
                        
                        <button type='submit' class = 'adduser'>Create Teamsheet</button>
                        </form>
                    <form action='stats.php' method = 'post' class = 'form'> 
                        <input type='hidden' name='fixtureid' value=$row[FixtureID]>
                        <button type='submit' class = 'adduser'>Record Stats</button>
                        </form><br>
                    </div>
                    
                    ");
                }
            }
            // Displays every fixture in the database
            
        ?>
    
        

        <a class = "pagebutton" style = "width: 50%" href="home_coach.php">Back</a>
        <a class = "pagebutton" style = "width: 50%" href="create_fixture.php">Create New Fixture</a>

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