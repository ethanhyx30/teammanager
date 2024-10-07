<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
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
        <a href = "create_player.php" class = "button1" style = "background-image: url('homepagecoach/1.jpeg'); ">
            <div class = "overlay1">
                Create Player
            </div>
        </a>
        <a href = "create_admin.php" class = "button2" style = "background-image: url('homepagecoach/2.jpeg'); ">
            <div class = "overlay2">
                Create Admin
            </div>
        </a>
    </div>
    <a class = "pagebutton" href="home_coach.php">Back</a>    
    <!-- Bottom of the page containing contact information -->
    <div class = "bottom">
        Made by Ethan He
    </div>
</body>
<style>
    .button1{
        width: 50%;
        height: 600px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover;
        /* Design for the buttons on the coaching home page */
    }
    .button2{
        width: 50%;
        height: 600px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover; 
        /* Design for the buttons on the coaching home page */
    }
    .overlay1{
        background-color: black;
        position: absolute;
        opacity: 0;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 50%;
        transition-duration: 0.5s;
    }
    /* Overlay layers - containing the text that is initially transparent and will only be visible when hovered over */
    .button1:hover .overlay1{
        opacity: .7;
    }
    .overlay2{
        background-color: black;
        position: absolute;
        opacity: 0;
        top: 0;
        bottom: 0;
        left: 50%;
        right: 0;
        height: 100%;
        width: 50%;
        transition-duration: 0.5s;
    }
    .button2:hover .overlay2{
        opacity: .7;
    }
</style>
</html>