<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/coyotes-logo-small.gif">Arizona Coyotes</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Arizona Coyotes");
    
    showStandings(53);
    getOpponent(53, "Arizona Coyotes");
    ?>
</html>