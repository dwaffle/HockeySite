<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/blues-logo-small.gif">St. Louis Blues</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("St. Louis Blues");
    showStandings(19);
    getOpponent(19, "St. Louis Blues");
    ?>
</html>