<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/jackets-logo-small.gif">Columbus Blue Jackets</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Columbus Blue Jackets");
    
    showStandings(29);
    getOpponent(29, "Columbus Blue Jackets");
    ?>
</html>