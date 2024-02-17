<?php
    /*
     * This file is responsible for interacting with the TWC Database.
     * The database contains the values that are used to evaluate runs for every category.
     */

    function get_survival(object $db, string $game, string $shot, string $route = 'NULL') {
        if ($game == 'th08') { 
            $statement = $db->prepare('SELECT MaxScore, FullSpellBonus FROM Survival WHERE Game = :game AND Route = :route AND Shottype = :shottype');
        } else {
            $statement = $db->prepare('SELECT MaxScore, FullSpellBonus FROM Survival WHERE Game = :game AND Route IS NULL AND Shottype = :shottype');
        }

        $statement->bindValue(':game', $game);
        $statement->bindValue(':route', $route);
        $statement->bindValue(':shottype', $shot);
        $result = $statement->execute();

        if ($result->numColumns() == 2) {
            $result = $result->fetchArray();
            $max_score = $result[0];
            $full_spell_bonus = !empty($result[1]) ? $result[1] : 0;
            return $max_score . ',' . $full_spell_bonus;
        } else {
            return 0; // data error
        }
    }

    function get_scoring(object $db, string $game, string $diff, string $shot) {
        $statement = $db->prepare('SELECT A, B, C FROM Scoring WHERE Game = :game AND Difficulty = :difficulty AND Shottype = :shottype');
        $statement->bindValue(':game', $game);
        $statement->bindValue(':difficulty', $diff);
        $statement->bindValue(':shottype', $shot);
        $result = $statement->execute();

        if ($result->numColumns() == 3) {
            $result = $result->fetchArray();
            return $result[0] . ',' . $result[1] . ',' . $result[2];
        }
    }

    class DB extends SQLite3 {
        function __construct() {
            $path = '../twc.db';
            $this->open($path);
        }
    }
    
    $db = new DB();

    if (!empty($_GET['rt']) && $_GET['rt'] == 'surv') {
        if (!empty($_GET['route'])) {
            echo get_survival($db, $_GET['game'], $_GET['shot'], $_GET['route']);
        } else {
            echo get_survival($db, $_GET['game'], $_GET['shot']);
        }
    } else {
        echo get_scoring($db, $_GET['game'], $_GET['diff'], $_GET['shot']);
    }
?>