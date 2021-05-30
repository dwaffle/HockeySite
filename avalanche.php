<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/avalanche-logo-small.gif">Colorado Avalanche</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Colorado Avalanche");
    showStandings(21);
    getOpponent(21, "Colorado Avalanche");
    ?>
</html>