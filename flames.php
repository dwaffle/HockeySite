<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/flames-logo-small.gif">Calgary Flames</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Calgary Flames");
    
    showStandings(20);
    getOpponent(20, "Calgary Flames");
    ?>
</html>