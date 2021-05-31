<?php
    date_default_timezone_set('America/Los_Angeles');
   
    function showTeamData($team){ 
        $allTeams = array("Colorado Avalanche", "Chicago Blackhawks", "St. Louis Blues", "Boston Bruins", "Montreal Canadiens", "Vancouver Canucks",
    "Washington Capitals", "Arizona Coyotes", "New Jersey Devils", "Anaheim Ducks", "Philadelphia Flyers", "Carolina Hurricanes", "New York Islanders", 
    "Columbus Blue Jackets", "Winnipeg Jets", "Los Angeles Kings", "Vegas Golden Knights", "Toronto Maple Leafs", "Tampa Bay Lightning", 
    "Edmonton Oilers", "Florida Panthers", "Pittsburgh Penguins", "Nashville Predators", "New York Rangers", "Buffalo Sabres", "Ottawa Senators",
    "San Jose Sharks", "Dallas Stars", "Minnesota Wild", "Detroit Red Wings");   
        if(!in_array($team, $allTeams)){
         die("That team doesn't exist!");   
        }
        $obj = getAllTeams();
        $regex = '/(Canadiens)/';
        for($i = 0; $i < count($obj->teams); $i++){
            if($obj->teams[$i]->name === $team || ($obj->teams[$i]->id === 8 && $team == "Montreal Canadiens")){
                $teamname = $obj->teams[$i]->name;
                $stadiumname = $obj->teams[$i]->venue->name;
                $conference = $obj->teams[$i]->conference->name;
                $division = $obj->teams[$i]->division->name;
                if($obj->teams[$i]->id === 8){
                    $teamname = "Montréal Canadiens";
                }
                echo("The $teamname play at $stadiumname and are in the $division Division of the $conference Conference ");
                break;
            }
        }
    }

    function getAllTeams(){
        system("allteams.py");
        $file = fopen("teams.txt", "r") or die("Unable to open file!");
        $json = "";
        while(!feof($file)){
            $json .= fgets($file);
        }
        $utf = utf8_decode($json);
        $obj = json_decode($utf);
        fclose($file);
        return $obj;
    }

    function getOpponent($teamId, $teamname){
        $allTeams = array("Colorado Avalanche", "Chicago Blackhawks", "St. Louis Blues", "Boston Bruins", "Montreal Canadiens", "Vancouver Canucks",
    "Washington Capitals", "Arizona Coyotes", "New Jersey Devils", "Anaheim Ducks", "Philadelphia Flyers", "Carolina Hurricanes", "New York Islanders", 
    "Columbus Blue Jackets", "Winnipeg Jets", "Los Angeles Kings", "Vegas Golden Knights", "Toronto Maple Leafs", "Tampa Bay Lightning", 
    "Edmonton Oilers", "Florida Panthers", "Pittsburgh Penguins", "Nashville Predators", "New York Rangers", "Buffalo Sabres", "Ottawa Senators",
    "San Jose Sharks", "Dallas Stars", "Minnesota Wild", "Detroit Red Wings");   
        if(!in_array($teamname, $allTeams)){
         die("Not an NHL team.");   
        }
        if($teamId < 0 || $teamId > 255){
            die("I am Error");
        }
        system("singleteam.py " . $teamId);
        $file = fopen("Matchup" . $teamId . ".txt", "r") or die("Unable to open file");
        $json = "";
        while(!feof($file)){
            $json .= fgets($file);
        }
        $utf = utf8_encode($json);
        $obj = json_decode($utf);
        //For offseason, delayed games, or other oddities.
          if(!isset($obj->teams[0]->nextGameSchedule,)){
            echo("<div class='games' style='text-align: center'>No games scheduled</div>");
            exit();
        }  
        $date = $obj->teams[0]->nextGameSchedule->dates[0]->games[0]->gameDate;
        $toTime = strtotime($date);  
        $homeTeam = utf8_decode($obj->teams[0]->nextGameSchedule->dates[0]->games[0]->teams->home->team->name);
        $visitingTeam = utf8_decode($obj->teams[0]->nextGameSchedule->dates[0]->games[0]->teams->away->team->name);
        #Strips the accented e out of Montreal.
        $regex = '/(Canadiens)/';
        if(preg_match($regex, $homeTeam)){
            $homeTeam = "Montréal Canadiens";
        } 
        if (preg_match($regex, $visitingTeam)){
            $visitingTeam = "Montréal Canadiens";
        }
        if($homeTeam === $teamname){
            echo("<div class='games' style='text-align: center'>The " . $homeTeam . " are at home against the " . $visitingTeam . " next on " . date('m/d', strtotime($date)). " at " . date("h:i a", strtotime($date)) . "</div>");
        } else {
            echo("<div class='games' style='text-align: center'>The " . $visitingTeam . " are visiting the " . $homeTeam . " next on " . date('m/d', strtotime($date)) . " at " . date("h:i a", strtotime($date)) . "</div>");
        }
    }

    function showStandings($teamId){
        include 'style.php';
        if($teamId < 0 || $teamId > 255){
            die("Error");
        }
        system("standings.py " . $teamId); 
        $file = fopen("Standings" . $teamId . ".txt", "r") or die("Unable to open file");
        $json = "";
        while(!feof($file)){
            $json .= fgets($file);   
        }
        #The NJ Devils, team id 1, do not seem to need their data changed to utf-8 first.
        if($teamId !== 1){
            $utf = utf8_encode($json);
            $obj = json_decode($utf);
        } else {
            $obj = json_decode($json);
        }
        $statsfile = fopen("Stats.txt", "r") or die("Unable to open file");
        $json2 = "";
        while(!feof($statsfile)){
            $json2 .= fgets($statsfile);
        }
        $utf = utf8_encode($json2);
        $stats = json_decode($utf);
        $rank = "";
        #Is there a better way?  As far as I can tell, I need to find the right division, then the right team record.
        for($i = 0; $i < count($stats->records); $i++){
            for($j = 0; $j < count($stats->records[$i]->teamRecords); $j++){
                if($stats->records[$i]->teamRecords[$j]->team->id === $teamId){
                    $rank = $stats->records[$i]->teamRecords[$j]->divisionRank;
                }
            }
        }
        $modifier = "";
        switch($rank){
            case 1:
                $modifier = "st";
                break;
            case 2:
                $modifier = "nd";
                break;
            case 3:
                $modifer = "rd";
                break;
            default:
                $modifier = "th";
                break;
        }
        $played = $obj->stats[0]->splits[0]->stat->gamesPlayed;
        $wins = $obj->stats[0]->splits[0]->stat->wins;
        $losses = $obj->stats[0]->splits[0]->stat->losses;
        $ot = $obj->stats[0]->splits[0]->stat->ot;
        $pts = $obj->stats[0]->splits[0]->stat->pts; 
        
        echo '<table class="statsTable">';
        echo '<tr><th>Games Played<th>Won<th>Lost<th>Overtime Losses<th>Points<th>Division Rank</tr>';
        echo '<td>' . $played . '<td>' . $wins . '<td>' . $losses . '<td>' . $ot . '<td>' . $pts . '<td>' . $rank . $modifier;
        echo '</table>';
    }

    function getHeadlines(){
        system("/topstories/stories.py");
        $file = fopen("topstories/News.txt", "r") or die("Unable to open file");
        $json = "";
        while(!feof($file)){
            $json .= fgets($file);   
        }
        $json = json_decode($json);
        $resultsTotal = $json->num_results;
        for($i = 0; $i < $resultsTotal; $i++){
            $link = $json->results[$i]->url;
            echo "<a href='$link'>";
            echo $json->results[$i]->title;
            echo "</a>";
            echo '<br />';
        }
    }

    function getCoins(){
        system('prices/bitcoin.py');
        $file = fopen("./prices/coin.txt", "r") or die("Unable to open file");
        $json = "";
        while(!feof($file)){
            $json .= fgets($file);   
        }
        $json = json_decode($json);
        echo 'Prices last refreshed at ' . date('m/d h:i a', strtotime($json->status->timestamp)) . '<br />';
        for($i = 0; $i < 10; $i++){
            echo($json->data[$i]->name . ": ");
            $price = number_format((float)$json->data[$i]->quote->USD->price,2, '.', '');
            echo($price);
            echo('<br />');
        }
    }
?>