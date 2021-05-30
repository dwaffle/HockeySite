<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/kings-logo-small.gif">Los Angeles Kings</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Los Angeles Kings");
    
    showStandings(26);
    getOpponent(26, "Los Angeles Kings");
    ?>
</html>