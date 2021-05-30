<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/oilers-logo-small.gif">Edmonton Oilers</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Edmonton Oilers");
    
    showStandings(22);
    getOpponent(22, "Edmonton Oilers");
    ?>
</html>