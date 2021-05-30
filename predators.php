<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/predators-logo-small.gif">Nashville Predators</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Nashville Predators");
    
    showStandings(18);
    getOpponent(18, "Nashville Predators");
    ?>
</html>