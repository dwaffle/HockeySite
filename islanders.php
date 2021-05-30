<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/islanders-logo-small.gif">New York Islanders</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("New York Islanders");
    
    showStandings(2);
    getOpponent(2, "New York Islanders");
    ?>
</html>