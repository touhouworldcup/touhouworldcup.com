<?php
function format_results(array $result, bool $is_bonus) {
    $formatted = '';
    for ($i = 1; $i <= 3; $i++) {
        $formatted .= ($i > 1 ? '<br>' : '');
        if (empty($result['P' . $i . '_Shottype']) && empty($result['P' . $i . '_Result']) && intval($result['P' . $i . '_TWCScore']) === 0) {
            $formatted .= '-';
            continue;
        }
        $formatted .= (empty($result['P' . $i . '_Shottype']) ? '' : _($result['P' . $i . '_Shottype'])) . ' <br class="mobile_br">';
        //$formatted .= (empty($result['P' . $i . '_Shottype']) ? '' : $result['P' . $i . '_Route']) . ' ';
        if (is_numeric($result['P' . $i . '_Result'])) { // scoring
            $formatted .= number_format($result['P' . $i . '_Result'], 0, '.', ',');
        } else { // survival
            $formatted .= $result['P' . $i . '_Result'];
        }
        if (isset($result['P' . $i . '_GameOver'])) {
            $formatted .= '*';
        }
        $score = $result['P' . $i . '_Result'];
        $twcscore = $result['P' . $i . '_TWCScore'];
        $formatted .= '<br class="mobile_br">';
        if (!$is_bonus) {
            $formatted .= _(' (');
            $formatted .= (float) $twcscore;
            if (($score == '5039634070' || $score == '6253568980') && (float) $twcscore == 0) {
                $formatted .= '*'; // 2020/2021 gameover
            }
            $formatted .= _(')');
        }
    }
    return $formatted;
}
function format_points(array $result, string $year) {
    $formatted = '';
    $points = [0, 0, 0];
    $indices = [0, 1, 2];
    $score = [$result['P1_Result'], $result['P2_Result'], $result['P3_Result']];
    $twcscore = [$result['P1_TWCScore'], $result['P2_TWCScore'], $result['P3_TWCScore']];
    $two_player_2020_penalty = 0;

    // check for bonus match
    if ($twcscore[0] == 0 && $twcscore[1] == 0 && $twcscore[2] == 0) {
        return '0<br>0<br>0<br class="mobile_br"><br class="mobile_br">';
    }

    // check if all three are equal
    if ($twcscore[0] == $twcscore[1] && $twcscore[1] == $twcscore[2]) {
        return '<strong>1</strong><br><strong>1</strong><br><strong>1</strong>';
    }

    // TODO edge case: 2021 two winning players 1.5 -> 1
    // TODO edge case: 2021 all three players 0 TWCScore -> raw score tiebreaker

    // 2020 two-player match edge case
    if ($year == '2020') {
        if ($result['P1_Shottype'] == NULL && $result['P1_Result'] != 'DNF'
                || $result['P2_Shottype'] == NULL && $result['P2_Result'] != 'DNF'
                || $result['P3_Shottype'] == NULL && $result['P3_Result'] != 'DNF') {
            $two_player_2020_penalty = 1;
        }
    }

    // check if two players are equal
    if ($twcscore[0] == $twcscore[1]) {
        $points[0] = '<strong>1.5</strong>';
        $points[1] = '<strong>1.5</strong>';
    } else if ($twcscore[0] == $twcscore[2]) {
        $points[0] = '<strong>1.5</strong>';
        $points[2] = '<strong>1.5</strong>';
    } else if ($twcscore[1] == $twcscore[2]) {
        $points[1] = '<strong>1.5</strong>';
        $points[2] = '<strong>1.5</strong>';
    }

    // determine winner
    $highest = max($twcscore);
    $highest_index = array_flip($twcscore)[$highest];

    // if tie is below winner, set tied players to 0.5
    if ($points[$highest_index] == 0) {
        $points[$highest_index] = '<strong>' . (2 - $two_player_2020_penalty) . '</strong>';
        foreach ($points as $key => $point) {
            if (strpos($points[$key], '1.5') !== false) {
                $points[$key] = '0.5';
            }
        }
    }

    // make array without winner
    $twcscore_mod = $twcscore;
    unset($twcscore_mod[$highest_index]);
    $twcscore_mod = array_values($twcscore_mod);
    unset($indices[$highest_index]);
    $indices = array_values($indices);

    // get second place
    $second = max($twcscore_mod);
    $second_index = array_flip($twcscore)[$second];
    if ($points[$second_index] == 0) {
        $points[$second_index] = (1 - $two_player_2020_penalty);
    }

    // get third place index
    unset($twcscore_mod[$second_index]);
    $twcscore_mod = array_values($twcscore_mod);
    unset($indices[$second_index]);
    $indices = array_values($indices);
    $third_index = $indices[0];

    // check if 0.5 tie is in fact a tie (edge cases)
    if ($points[$second_index] == '0.5') {
        if ($score[$second_index] == NULL && $score[$third_index] != NULL) {
            $points[$second_index] = '0';
            $points[$third_index] = (1 - $two_player_2020_penalty);
        } else if ($score[$second_index] != NULL && $score[$third_index] == NULL) {
            $points[$second_index] = (1 - $two_player_2020_penalty);
            $points[$third_index] = '0';
        } else if ($score[$second_index] == 'DNF' && $score[$third_index] != NULL) {
            $points[$second_index] = '0';
            $points[$third_index] = (1 - $two_player_2020_penalty);
        } else if ($score[$second_index] != NULL && $score[$third_index] == 'DNF') {
            $points[$second_index] = (1 - $two_player_2020_penalty);
            $points[$third_index] = '0';
        }
    }

    // return points
    $formatted = implode('<br>', $points);
    return $formatted;

    /*for ($i = 1; $i <= 3; $i++) {
        $formatted .= ($i > 0 ? '<br>' : '');
        if (!in_array($key, $bonus_matches)) {
            $formatted .= ($result['points'] == $max_points ? '<strong>' . $result['points'] . '</strong>' : $result['points']);
        }
        $formatted .= '<br class="mobile_br"><br class="mobile_br">';
    }*/
}
function print_schedule(array $schedule, array $results, array $teams, string $year) {
    if (count($schedule) == 0) {
        return;
    }
    global $lang;
    $highlight = false;
    foreach ($schedule as $key => $match) {
        $is_bonus = $year != '2020' && $key >= count($schedule) - 2 || $year == '2020' && $key == count($schedule) - 1;
        if ($year != '2020' && $key == count($schedule) - 2 || $year == '2020' && $key == count($schedule) - 1) {
            echo '<tr><td class="bonus" colspan="6"><strong>' . _('Exhibition Matches') . '</strong></td></tr>';
        }
        if (!$highlight && strtotime($match['Date__UTC_']) >= time()) {
            echo '<tr' . ($is_bonus ? ' class="bonus_match"' : '') . ' class="highlight">';
            $highlight = true;
        } else {
            echo '<tr' . ($is_bonus ? ' class="bonus_match"' : '') . '>';
        }
        echo '<td id="date_' . $year . '_' . $key . '">' . date_format(date_create($match['Date__UTC_']), get_date_format($lang)) . '</td>';
        echo '<td class="' . preg_split('/ /', $match['Category'])[0] . '">' . $match['Category'] . '</td><td>';
        for ($i = 1; $i <= 3; $i++) {
            if (empty($teams)) {
                echo $match['Player_' . $i]. '<br>';
                continue;
            }
            $team = $teams[$i - 1];
            echo '<span class="team"><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"><span class="tooltip">' . _('Team ' . $team['Name']) . '</span></span> ' . $match['Player_' . $i] . '<br>';
        }
        echo '</td><td>' . ($match['ResetTime'] === 0 ? 'N/A' : $match['ResetTime']) . '</td>';
        if (array_key_exists($key, $results)) {
            echo '<td class="spoiler">' . format_results($results[$key], $is_bonus) . '</td>';
            if (!$is_bonus) {
                echo '<td class="spoiler">' . format_points($results[$key], $year) . '</td>';
            } else {
                echo '<td class="spoiler">&nbsp;</td>';
            }
        } else {
            echo '<td class="spoiler">&nbsp;</td><td class="spoiler">&nbsp;</td>';
        }
        echo '</tr>';
    }
}
?>