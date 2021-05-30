<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/devils-logo-small.gif">New Jersey Devils</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("New Jersey Devils");
    
    showStandings(1);
    getOpponent(1, "New Jersey Devils");
    ?>
</html>