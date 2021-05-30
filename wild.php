<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/wild-logo-small.gif">Minnesota Wild</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Minnesota Wild");
    
    showStandings(30);
    getOpponent(30, "Minnesota Wild");
    ?>
</html>