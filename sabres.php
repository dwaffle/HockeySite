<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/sabres-logo-small.gif">Buffalo Sabres</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Buffalo Sabres");
    
    showStandings(7);
    getOpponent(7, "Buffalo Sabres");
    ?>
</html>