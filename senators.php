<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/senators-logo-small.gif">Ottawa Senators</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Ottawa Senators");
    
    showStandings(9);
    getOpponent(9, "Ottawa Senators");
    ?>
</html>