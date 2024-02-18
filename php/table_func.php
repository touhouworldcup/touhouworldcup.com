<?php
function format_results(array $results, array $bonus_matches, string $key) {
    $formatted = '';
    for ($i = 0; $i < count($results[$key]); $i++) {
        $result = $results[$key][$i];
        $formatted .= ($i > 0 ? '<br>' : '');
        if (empty($result['shot']) && empty($result['score']) && $result['twcscore'] === 0) {
            $formatted .= '-';
            continue;
        }
        $formatted .= (empty($result['shot']) ? '' : _($result['shot'])) . ' <br class="mobile_br">';
        $formatted .= (empty($result['route']) ? '' : $result['route']) . ' ';
        if (is_string($result['score'])) { // survival
            $formatted .= $result['score'];
        } else { // scoring
            $formatted .= number_format($result['score'], 0, '.', ',');
        }
        if (isset($result['gameover'])) {
            $formatted .= '*';
        }
        $twcscore = ($result['twcscore'] == '-1' ? '?' : $result['twcscore']);
        $formatted .= '<br class="mobile_br">';
        if (!in_array($key, $bonus_matches)) {
            $formatted .= _(' (');
            $formatted .= $twcscore;
            $formatted .= _(')');
        }
    }
    return $formatted;
}
function format_points(array $results, array $bonus_matches, string $key) {
    $formatted = '';
    if (!empty($results[$key][2]['points'])) {
        $max_points = max($results[$key][0]['points'], $results[$key][1]['points'], $results[$key][2]['points']);
    } else {
        $max_points = max($results[$key][0]['points'], $results[$key][1]['points']);
    }
    for ($i = 0; $i < count($results[$key]); $i++) {
        $result = $results[$key][$i];
        $formatted .= ($i > 0 ? '<br>' : '');
        if (!in_array($key, $bonus_matches)) {
            if ($result['points'] == -1) {
                $formatted .= 'N/A';
            } else {
                $formatted .= ($result['points'] == $max_points ? '<strong>' . $result['points'] . '</strong>' : $result['points']);
            }
        }
        $formatted .= '<br class="mobile_br"><br class="mobile_br">';
    }
    return $formatted;
}
function print_schedule(array $schedule, array $results, array $teams, string $year) {
    if (sizeof($schedule) == 0) {
        return;
    }
    global $lang;
    $highlight = false;
    $bonus_matches = array('1584273600', '1620558000', '1620567000', '1657980000', '1658062800', '1691312400', '1691323200');
    foreach ($schedule as $key => $match) {
        /*if ($key == '1584273600' || $key == '1620558000' || $key == '1657980000' || $key == '1691312400') {
            echo '<tr><td class="bonus" colspan="6"><strong>' . _('Exhibition Matches') . '</strong></td></tr>';
        }*/
        /*if (!$highlight && $key >= time()) {
            echo '<tr' . (in_array($key, $bonus_matches) ? ' class="bonus_match"' : '') . ' class="highlight">';
            $highlight = true;
        } else {*/
            echo '<tr' . (in_array($key, $bonus_matches) ? ' class="bonus_match"' : '') . '>';
        //}
        echo '<td id="date_' . $year . '_' . $key . '">' . date_format(date_create($match['Date__UTC_']), get_date_format($lang)) . '</td>';
        echo '<td class="' . preg_split('/ /', $match['Category'])[0] . '">' . $match['Category'] . '</td><td>';
        for ($i = 1; $i <= 3; $i++) {
            $team = $teams[$i - 1];
            echo '<span class="team">' . $team->image . '<span class="tooltip">Team ' . $team->name . '</span></span> ' . $match['Player_' . $i] . '<br>';
        }
        echo '</td><td>' . ($match['ResetTime'] === 0 ? 'N/A' : $match['ResetTime']) . '</td>';
        if (array_key_exists($key, $results)) {
            echo '<td class="spoiler">' . format_results($results, $bonus_matches, $key) . '</td>';
            if (!in_array($key, $bonus_matches)) {
                echo '<td class="spoiler">' . format_points($results, $bonus_matches, $key) . '</td>';
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