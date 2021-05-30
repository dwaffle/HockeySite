<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/flyers-logo-small.gif">Philadelphia Flyers</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Philadelphia Flyers");
    
    showStandings(4);
    getOpponent(4, "Philadelphia Flyers");
    ?>
</html>