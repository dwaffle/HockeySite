<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/capitals-logo-small.gif">Washington Capitals</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Washington Capitals");
    
    showStandings(15);
    getOpponent(15, "Washington Capitals");
    ?>
</html>