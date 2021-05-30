<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/sharks-logo-small.gif">San Jose Sharks</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("San Jose Sharks");
    
    showStandings(28);
    getOpponent(28, "San Jose Sharks");
    ?>
</html>