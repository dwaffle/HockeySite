<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/wings-logo-small.gif">Detroit Red Wings</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Detroit Red Wings");
    
    showStandings(17);
    getOpponent(17, "Detroit Red Wings");
    ?>
</html>