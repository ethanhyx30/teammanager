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
        <div class = "bg"> 
            <div class = "create">
            <h1 class = "title">Add a New Fixture</h1>
            <!-- Allows the user to enter information, which will then be entered into the database via addplayer.php -->
                <form action="addfixture.php" method = "post" class = "form"> 
                    Opponent:<br><input type = "text" name = "opponent" class = "inputbox"><br>
                    Date:<br><input type = "date" name = "date" class = "inputbox"><br>
                    Time:<br><input type = "time" name = "time" class = "inputbox"><br>
                    Location:<br><input type = "text" name = "location" class = "inputbox"><br>
                    Home or Away: <br><select name = "h/a" class = "inputbox">
                        <option value = "Home">Home</option>
                        <option value = "Aome">Away</option>
                    </select><br>
                    Type: <br><select name = "type" class = "inputbox">
                        <option value = "Friendly">Friendly</option>
                        <option value = "Tournament">Tournament</option>
                        <option value = "Cup">Cup</option>
                    </select><br>

                    <input type="submit" value = "Add Fixture" class = "adduser">
                </form>
            </div>
            <a class = "pagebutton" href="home_fixture_coach.php">Back</a>
        </div> 
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