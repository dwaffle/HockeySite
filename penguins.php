<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/penguins-logo-small.gif">Pittsburgh Penguins</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Pittsburgh Penguins");
    
    showStandings(5);
    getOpponent(5, "Pittsburgh Penguins");
    ?>
</html>