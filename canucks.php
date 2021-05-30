<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/canucks-logo-small.gif">Vancouver Canucks</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Vancouver Canucks");
    showStandings(23);
    getOpponent(23, "Vancouver Canucks");
    ?>
</html>