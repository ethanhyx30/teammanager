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
            <h1 class = "title">Create Admin</h1>
            <!-- Allows the user to enter information, which will then be entered into the database via addplayer.php -->
                <form action="addadmin.php" method = "post" class = "form"> 
                    Username:<br><input type = "text" name = "username" class = "inputbox"><br>
                    Password:<br><input type = "password" name = "password" class = "inputbox"><br>
                    <input type="submit" value = "Add User" class = "adduser">
                </form>
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

    }
    .create{
        background-color: white;
        margin-left: 250px;
        margin-right: 250px;
        box-shadow: 0 0 5px 5px black;
    }
</style>
</html>