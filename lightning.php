<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/lightning-logo-small.gif">Tampa Bay Lightning</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Tampa Bay Lightning");
    showStandings(14);
    getOpponent(14, "Tampa Bay Lightning");
    ?>
</html>