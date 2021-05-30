<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/knights-logo-small.gif">Vegas Golden Knights</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Vegas Golden Knights");
    
    showStandings(54);
    getOpponent(54, "Vegas Golden Knights");
    ?>
</html>