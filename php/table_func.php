<?php
function format_results(array $result, bool $is_bonus) {
    $formatted = '';
    if (empty($result['P1_Shottype']) && empty($result['P2_Shottype']) && empty($result['P3_Shottype'])) {
        return '';
    }
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
    if (empty($result['P1_Shottype']) && empty($result['P2_Shottype']) && empty($result['P3_Shottype'])) {
        return '';
    }

    $formatted = '';
    $points = [0, 0, 0];
    $indices = [0, 1, 2];
    $score = [$result['P1_Result'], $result['P2_Result'], $result['P3_Result']];
    $twcscore = [$result['P1_TWCScore'], $result['P2_TWCScore'], $result['P3_TWCScore']];
    $two_player_2020_penalty = 0;

    // 2021 2021 two winning players 1.5 -> 1 edge case
    if ($result['P1_Shottype'] == 'YoumuEagle') {
        return '<strong>1</strong><br>0<br><strong>1</strong>';
    }

    // 2021 all three players 0 TWCScore -> raw score tiebreaker edge case
    if ($result['P1_Result'] == '833419540') {
        return '0<br><strong>2</strong><br>1';
    }

    // check for bonus match
    if ($twcscore[0] == 0 && $twcscore[1] == 0 && $twcscore[2] == 0) {
        return '0<br>0<br>0<br class="mobile_br"><br class="mobile_br">';
    }

    // check if all three are equal
    if ($twcscore[0] == $twcscore[1] && $twcscore[1] == $twcscore[2]) {
        return '<strong>1</strong><br><strong>1</strong><br><strong>1</strong>';
    }

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
function get_icon(string $link) {
    if (strpos($link, 'twitch') !== false) {
        return '<img class="icon16 twitch" src="/assets/icons/icon_sheet_16.png" alt="Twitch icon">';
    }
    else if (strpos($link, 'twitter') !== false) {
        return '<img class="icon16 twitter" src="/assets/icons/icon_sheet_16.png" alt="Twitter icon">';
    }
    else if (strpos($link, 'youtube') !== false) {
        return '<img class="icon16 youtube" src="/assets/icons/icon_sheet_16.png" alt="YouTube icon">';
    }
    else if (strpos($link, 'bilibili') !== false) {
        return '<img class="icon16 bilibili" src="/assets/icons/icon_sheet_16.png" alt="Bilibili icon">';
    }
    else {
        return '<img class="icon16 globe" src="/assets/icons/icon_sheet_16.png" alt="Globe with meridians icon">';
    }
}
function print_schedule(array $schedule, array $results, array $teams, string $year, array $players) {
    if (count($schedule) == 0) {
        return;
    }
    global $lang;
    $highlight = false;
    foreach ($schedule as $key => $match) {
        $is_bonus = $year == '2025' && $key >= count($schedule) - 3 || $year != '2020' && $year != '2025' && $key >= count($schedule) - 2 || $year == '2020' && $key == count($schedule) - 1;
        if ($year == '2025' && $key == count($schedule) - 3 || $year != '2020' && $year != '2025' && $key == count($schedule) - 2 || $year == '2020' && $key == count($schedule) - 1) {
            echo '<tr><td class="bonus" colspan="6"><strong>' . _('Exhibition Matches') . '</strong></td></tr>';
        }
        if (!$highlight && strtotime($match['Date__UTC_']) >= time()) {
            echo '<tr' . ($is_bonus ? ' class="bonus_match"' : '') . ' class="highlight">';
            $highlight = true;
        } else {
            echo '<tr' . ($is_bonus ? ' class="bonus_match"' : '') . '>';
        }
        if (!empty($match['Date__UTC_'])) {
            echo '<td id="date_' . $year . '_' . $key . '">' . date_format(date_create($match['Date__UTC_']), get_date_format($lang)) . '</td>';
        } else {
            echo '<td>???</td>';
        }
        echo '<td class="' . preg_split('/ /', $match['Category'])[0] . '">' . $match['Category'] . '</td><td>';
        for ($i = 1; $i <= 3; $i++) {
            $player = $match['Player_' . $i];
            if (empty($teams)) {
                echo $player . '<br>';
                continue;
            }
            $team = $teams[$i - 1];
            echo '<span class="team"><img class="icon16 ' . strtolower($team['Name']) . '" src="/assets/icons/icon_sheet_16.png" alt="' . _('Team ' . $team['Name']) . '"><span class="tooltip">' . _('Team ' . $team['Name']) . '</span></span> ';
            $player_key = array_search($player, array_column($players, 'Name'));
            if (!empty($players) && $player_key !== false) {
                if ($lang == 'ja_JP' && !empty($players[$player_key]['JapaneseName'])) {
                    echo $players[$player_key]['JapaneseName'];
                }
                else if ($lang == 'zh_CN' && !empty($players[$player_key]['ChineseName'])) {
                    echo $players[$player_key]['ChineseName'];
                }
                else {
                    echo $player;
                }
                if ($players[$player_key]['DisplayStream'] === 1) {
                    echo ' <a href="' . $players[$player_key]['Stream'] . '">' . get_icon($players[$player_key]['Stream']) . '</a>';
                }
                if (!empty($players[$player_key]['Social'])) {
                    echo ' <a href="' . $players[$player_key]['Social'] . '">' . get_icon($players[$player_key]['Social']) . '</a>';
                }
            } else {
                echo $player;
            }
            echo '<br>';
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