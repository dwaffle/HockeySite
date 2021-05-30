<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/canadiens-logo-small.gif">Montréal Canadiens</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Montreal Canadiens");
    showStandings(8);
    getOpponent(8, "Montreal Canadiens");
    ?>
</html>