<?php
    /*
     * This file is responsible for interacting with the TWC Database.
     * The database contains the values that are used to evaluate runs for every category.
     */

    function get_survival(mysqli $db, string $game, string $shot, string $route = 'NULL') {
        if ($game == 'th08') { 
            $statement = mysqli_prepare($db, 'SELECT MaxScore, FullSpellBonus FROM `Survival Rubrics` WHERE Game = ? AND Route = ? AND Shottype = ?');
            $statement->bind_param('sss', $game, $route, $shot);
        } else {
            $statement = mysqli_prepare($db, 'SELECT MaxScore, FullSpellBonus FROM `Survival Rubrics` WHERE Game = ? AND Route IS NULL AND Shottype = ?');
            $statement->bind_param('ss', $game, $shot);
        }

        $statement->execute();
        $result = $statement->get_result();

        if ($row = $result->fetch_assoc()) {
            return json_encode($row);
        } else {
            return '{}'; // data error
        }
    }

    function get_survival_th128(mysqli $db, string $game, string $shot) {
        $statement = mysqli_prepare($db, 'SELECT GFW_A, GFW_B, GFW_C FROM `Survival Rubrics` WHERE Game = ? AND Shottype = ?');
        $statement->bind_param('ss', $game, $shot);
        $statement->execute();
        $result = $statement->get_result();

        if ($row = $result->fetch_assoc()) {
            return json_encode($row);
        } else {
            return '{}'; // data error
        }
    }

    function get_scoring(mysqli $db, string $game, string $diff, string $shot) {
        $statement = mysqli_prepare($db, 'SELECT A, B, C FROM `Scoring Rubrics` WHERE Game = ? AND Difficulty = ? AND Shottype = ?');
        $statement->bind_param('sss', $game, $diff, $shot);
        $statement->execute();
        $result = $statement->get_result();

        if ($row = $result->fetch_assoc()) {
            return json_encode($row);
        } else {
            return '{}'; // data error
        }
    }

    function get_schedule(mysqli $db, string $year) {
        $statement = mysqli_prepare($db, 'SELECT * FROM `Schedule ' . $year . '`');
        $statement->execute();
        $result = $statement->get_result();
        for ($rows = array (); $row = $result->fetch_assoc(); $rows[] = $row);
        return json_encode($rows);
    }

    function get_results(mysqli $db, string $year) {
        $statement = mysqli_prepare($db, 'SELECT * FROM `Results ' . $year . '`');
        $statement->execute();
        $result = $statement->get_result();
        for ($rows = array (); $row = $result->fetch_assoc(); $rows[] = $row);
        return json_encode($rows);
    }

    function get_teams(mysqli $db, string $year) {
        $statement = mysqli_prepare($db, 'SELECT * FROM `Teams ' . $year . '`');
        $statement->execute();
        $result = $statement->get_result();
        for ($rows = array (); $row = $result->fetch_assoc(); $rows[] = $row);
        return json_encode($rows);
    }

    function get_players(mysqli $db) {
        $statement = mysqli_prepare($db, 'SELECT * FROM `Players`');
        $statement->execute();
        $result = $statement->get_result();
        for ($rows = array (); $row = $result->fetch_assoc(); $rows[] = $row);
        return json_encode($rows);
    }

    if (file_exists('../.pw')) {
        $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('../.pw'), 'twc');

        if ($db->connect_error) {
            die('Database connection failed: ' . $db->connect_error);
        }

        if (!empty($_GET['rt']) && $_GET['rt'] == 'surv') {
            if (!empty($_GET['route'])) {
                echo get_survival($db, $_GET['game'], $_GET['shot'], $_GET['route']);
            } else if ($_GET['game'] == 'th128') {
                echo get_survival_th128($db, $_GET['game'], $_GET['shot']);
            } else {
                echo get_survival($db, $_GET['game'], $_GET['shot']);
            }
        } else {
            echo get_scoring($db, $_GET['game'], $_GET['diff'], $_GET['shot']);
        }
    }
?>
