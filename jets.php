<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/jets-logo-small.gif">Winnipeg Jets</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Winnipeg Jets");
    
    showStandings(52);
    getOpponent(52, "Winnipeg Jets");
    ?>
</html>