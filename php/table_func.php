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
function print_schedule(array $schedule, array $results, array $teams) {
    global $lang;
    $bonus_matches = array('1584273600', '1620558000', '1620567000', '1657980000', '1658062800');
    foreach ($schedule as $key => $match) {
        if ($key == '1584273600' || $key == '1620558000' || $key == '1657980000') {
            echo '<tr><td class="bonus" colspan="6"><strong>' . _('Exhibition Matches') . '</strong></td></tr>';
        }
        echo '<tr' . (in_array($key, $bonus_matches) ? ' class="bonus_match"' : '') . '>';
        echo '<td id="' . $key . '_date">' . gmdate(get_date_format($lang), $key) . '</td>';
        echo '<td class="' . preg_split('/ /', $match['category'])[0] . '">' . $match['category'] . '</td><td>';
        foreach ($match['players'] as $index => $player) {
            $team = $teams[$index];
            echo '<span class="team">' . $team->image . '<span class="tooltip">Team ' . $team->name . '</span></span> ' . $player . '<br>';
        }
        echo '</td><td>' . ($match['reset'] === 0 ? 'N/A' : $match['reset']) . '</td>';
        if (array_key_exists($key, $results)) {
            echo '<td>' . format_results($results, $bonus_matches, $key) . '</td>';
            if (!in_array($key, $bonus_matches)) {
                echo '<td>' . format_points($results, $bonus_matches, $key) . '</td>';
            } else {
                echo '<td>&nbsp;</td>';
            }
        } else {
            echo '<td>&nbsp;</td><td>&nbsp;</td>';
        }
        echo '</tr>';
    }
}
?>