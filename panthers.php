<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/panthers-logo-small.gif">Florida Panthers</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Florida Panthers");
    
    showStandings(13);
    getOpponent(13, "Florida Panthers");
    ?>
</html>