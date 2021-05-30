<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/stars-logo-small.gif">Dallas Stars</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Dallas Stars");
    
    showStandings(25);
    getOpponent(25, "Dallas Stars");
    ?>
</html>