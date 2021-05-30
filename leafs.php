<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/leafs-logo-small.gif">Toronto Maple Leafs</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Toronto Maple Leafs");
    showStandings(10);
    getOpponent(10, "Toronto Maple Leafs");
    ?>
</html>