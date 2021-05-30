<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/rangers-logo-small.gif">New York Rangers</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("New York Rangers");
    showStandings(3);
    getOpponent(3, "New York Rangers");
    ?>
</html>