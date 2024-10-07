<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
        <a href = "create.php" class = "button1" style = "background-image: url('homepagecoach/1.jpeg'); ">
            <div class = "overlay1">
                Create User
            </div>
        </a>
        <a href = "https://www.wikipedia.org/" class = "button2" style = "background-image: url('homepagecoach/2.jpeg'); ">
            <div class = "overlay2">
                Team Centre
            </div>
        </a>
        <a href = "https://www.wikipedia.org/" class = "button3" style = "background-image: url('homepagecoach/3.jpeg'); ">
            <div class = "overlay3">
                Player Search
            </div>
        </a>
        <a href = "home_fixture_coach.php" class = "button4" style = "background-image: url('homepagecoach/4.jpeg'); ">
            <div class = "overlay4">
                Fixtures
            </div>
        </a>
    </div>    
    <!-- Bottom of the page containing contact information -->
    <div class = "bottom">
        Made by Ethan He
    </div>
</body>
<style>
    .button1{
        width: 50%;
        height:400px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover 
        /* Design for the buttons on the coaching home page */
    }
    .button2{
        width: 50%;
        height:400px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover 
        /* Design for the buttons on the coaching home page */
    }
    .button3{
        width: 50%;
        height:400px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover 
        /* Design for the buttons on the coaching home page */
    }
    .button4{
        width: 50%;
        height:400px;
        float: left;
        text-align: center;
        color: white;
        background-color: #970830;
        text-decoration: none;
        font-size: 50px;
        font-weight:1000;
        transition: .5s ease;
        background-size:cover 
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
        height: 50%;
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
        height: 50%;
        width: 50%;
        transition-duration: 0.5s;
    }
    .button2:hover .overlay2{
        opacity: .7;
    }
    .overlay3{
        background-color: black;
        position: absolute;
        opacity: 0;
        top: 50%;
        bottom: 0;
        left: 0;
        right: 0;
        height: 50%;
        width: 50%;
        transition-duration: 0.5s;
    }
    .button3:hover .overlay3{
        opacity: .7;
    }
    .overlay4{
        background-color: black;
        position: absolute;
        opacity: 0;
        top: 50%;
        bottom: 0;
        left: 50%;
        right: 0;
        height: 50%;
        width: 50%;
        transition-duration: 0.5s;
    }
    .button4:hover .overlay4{
        opacity: .7;
    }
</style>
</html>