<?php
    $title = _('Past Results');
    $description = 'Touhou World Cup results from past years';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2026, competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/table_func.php';
    include_once 'php/db.php';
    try {
		$db_host = getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost';
        $db = mysqli_connect($db_host, 'twc_admin', getenv('DB_PASSWORD'), 'twc_archive');
    } catch (Exception $e) {
        $_GET['error'] = 503;
        include_once 'php/error.php';
        die();
    }
    $json = get_players($db);
    $players = json_decode($json, true);
    $youtube = [
        2025 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUwcETVHKo9ONNKEyLXnYI7l',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMibMTZ5Y6hl0Mqold2MS5cj',
        ],
        2024 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUwcETVHKo9ONNKEyLXnYI7l',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMibMTZ5Y6hl0Mqold2MS5cj',
        ],
        2023 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUwjbkibyYpt2rbHEKZXil02',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMhKjxcKpp5MufQYJS5Mteiq',
        ],
        2022 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUwqlx8PynPoltQ5oPBDb6d8',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMiq8MLHCgU0zJ_3lpjwH9-5',
        ],
        2021 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUzjcX1-HbRtkuZ_yshGucxt',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMj54YYOenfb3G6DcrtoePhg',
        ],
        2020 => [
            'en' => 'https://www.youtube.com/playlist?list=PL-ggW392LLUzV2las6ky6c1QInMIvB5bG',
            'jp' => 'https://www.youtube.com/playlist?list=PLQxyFdZX5PMj5PDLI3EoX01JBnlJK34Dr',
        ],
    ];

?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1><?php echo _('Past Results') ?></h1>
    <!--<p class='large'><?php //echo _('This is NOT the current schedule! For the schedule, see the <a href="/schedule' . query_string(). '">Schedule</a> page.') ?></p>-->
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE' || $lang == 'es_ES') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
    ?></p>
    <div class="contents">
        <p>
            <a href="#2025">2025</a> / 
            <a href="#2024">2024</a> / 
            <a href="#2023">2023</a> / 
            <a href="#2022">2022</a> / 
            <a href="#2021">2021</a> / 
            <a href="#2020">2020</a>
        </p>
    </div>
    <p><input type="button" id="show_results" value="<?php echo _('Show Results') ?>"></p>
    <p><input type="button" id="hide_results" value="<?php echo _('Hide Results') ?>"></p>

    <?php foreach (['2025', '2024', '2023', '2022', '2021', '2020'] as $year): ?>
        <div class="section-header">
            <h2 id="<?= $year ?>">
                <img class="favicon"
                    src="/assets/legacy/favicon_<?= $year ?>.ico"
                    alt="<?= $year ?> favicon">
                TWC <?= $year ?>
            </h2>

            <div class="archive-links">
                <a href="<?= $links['en'] ?>" target="_blank" rel="noopener noreferrer">
                    <img class="icon16 youtube" src="/assets/icons/icon_sheet_16.png" alt="YouTube icon">EN
                </a>
                <a href="<?= $links['jp'] ?>" target="_blank" rel="noopener noreferrer">
                    <img class="icon16 youtube" src="/assets/icons/icon_sheet_16.png" alt="YouTube icon">JP
                </a>
            </div>
        </div>

        <p><?php echo _('Final tally:') ?></p>
        <ol><?php
            $json = get_teams($db, $year);
            $teams = json_decode($json, true);
            $index = 0;
            $max_index = 0;
            $max_points = 0;
            $display_teams = array();
            uasort($teams, function ($a, $b) {
                return $a['Points'] < $b['Points'] ? 1 : -1;
            });
            foreach ($teams as $team) {
                array_push($display_teams, '<li><img class="icon16 ' . strtolower($team['Name']) . '" src="/assets/icons/icon_sheet_16.png" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
                if ($team['Points'] > $max_points) {
                    $max_points = $team['Points'];
                    $max_index = $index;
                }
                $index++;
            }
            if (array_key_exists($max_index, $display_teams)) {
                $display_teams[$max_index] = str_replace('">', '"><strong>', $display_teams[$max_index]);
                $display_teams[$max_index] = str_replace('</li>', '</strong></li>', $display_teams[$max_index]);
            }
            echo implode($display_teams);
        ?></ol>

    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_<?php echo $year ?>"><?php
            $json = get_schedule($db, $year);
            $schedule = json_decode($json, true);
            $json = get_results($db, $year);
            $results = json_decode($json, true);
            print_schedule($schedule, $results, $teams, $year, $players);
        ?></tbody>
    </table>
    <?php endforeach; ?>

    <p class="spoiler">* <?php echo _('Game Over') ?></p>
    <p class="spoiler"><a href="#top"><?php echo _('Back to Top') ?></a></p>
	</main>
</body>
</html>
