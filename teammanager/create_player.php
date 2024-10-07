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
                <h1 class = "title">Create Player</h1>
            <!-- Allows the user to enter information, which will then be entered into the database via addplayer.php -->
                <form action="addplayer.php" method = "post" class = "form"> 
                    First Name:<br><input type = "text" name = "firstname" class = "inputbox"><br>
                    Last Name:<br><input type = "text" name = "lastname" class = "inputbox"><br>
                    Position:<br><select name = "position" class = "inputbox">
                        <option value = "PG">Point Guard</option>
                        <option value = "SG">Shooting Guard</option>
                        <option value = "SF">Small Forward</option>
                        <option value = "PF">Power Forward</option>
                        <option value = "C">Center</option>
                    </select><br>
                    Height:<br><input type = "number" name = "height" class = "inputbox"><br>
                    Weight:<br><input type = "number" name = "weight" class = "inputbox"><br>
                    Year:<br><input type = "number" name = "year" class = "inputbox"><br>
                    House:<br><input type = "text" name = "house" class = "inputbox"><br>
                    Username:<br><input type = "text" name = "username" class = "inputbox"><br>
                    Password:<br><input type = "password" name = "password" class = "inputbox"><br>
                    <input type="submit" value = "Add Player" class = "adduser">
                </form>
                <!-- <button class = "adduser" style = "margin-left:100px;">Back</button> -->
            </div>
            <a class = "pagebutton" href="create.php">Back</a>
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
        padding-top:0px;
        margin-top:0px;
        border-top:0px;


    }
    .create{
        background-color: white;
        margin-left: 250px;
        margin-right: 250px;
        /* box-shadow: 0 0 5px 5px black; */
    }
    
</style>
</html>