<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <div class="title">
        <h1><img src="Icons/bruins-logo-small.gif">Boston Bruins</h1>
    </div>
    <?php 
    include 'functions.php';
    showTeamData("Boston Bruins");
    showStandings(6);
    getOpponent(6, "Boston Bruins");
    ?>
</html>