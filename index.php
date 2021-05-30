<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <?php 
        include 'functions.php';
        include "style.php";
        echo '<link rel="stylesheet" type="text/css" href="style.php">' 
    ?>
    
    </head>

    <h1>Today's Top Headlines</h1>
    <h3>World News</h3>
    <?php 
        
        getHeadlines();
    ?>
    <h1>-----------------<h1>
<h1 class="title">Pick your favorite team!</h1>
<?php
    $teams = getAllTeams();
    $dir = "C:\wamp64\www\HockeySIte\icons";
    $icons= array_diff(scandir("C:\wamp64\www\HockeySIte\icons"), array('..', '.'));
    foreach($icons as $icon){
        if($icon === "nhl-logo-small.png"){
            continue;
        }
        $teamname = explode("-", $icon);
        echo '<a href="' . $teamname[0] . '.php"><img src="Icons/'. $icon .'" /></a>';
    }
    ?>
    
    <?php 
        
        echo '<div class="nhllogo"><a href="https://www.nhl.com"><img src="Icons\nhl-logo-small.png"></a> NHL, NHL Teams and Logos are copyright of the NHL</div>'
    ?>
    <h1>------------</h1>
    <h1><a href="crypto.php">Cryptocurrency Prices</a></h1>
</html>