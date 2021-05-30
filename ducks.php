<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/ducks-logo-small.gif">Anahemm Ducks</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Anaheim Ducks");
    
    showStandings(24);
    getOpponent(24, "Anaheim Ducks");
    ?>
</html>