<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/hurricanes-logo-small.gif">Carolina Hurricanes</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Carolina Hurricanes");
    
    showStandings(12);
    getOpponent(12  , "Carolina Hurricanes");
    ?>
</html>