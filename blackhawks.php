<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/blackhawks-logo-small.gif">Chicago Blackhawks</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Chicago Blackhawks");
    showStandings(16);
    getOpponent(16, "Chicago Blackhawks");
    ?>
</html>