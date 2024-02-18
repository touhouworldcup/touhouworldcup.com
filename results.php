<?php
    $title = _('Past Results');
    $description = 'Touhou World Cup results from past years';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2023 competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/table_func.php';
    include_once 'php/db.php';
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
    <h2 class="contents"><?php echo _('Contents') ?></h2>
    <div class="contents">
        <p><a href="#2023">2023</a></p>
        <p><a href="#2022">2022</a></p>
        <p><a href="#2021">2021</a></p>
        <p><a href="#2020">2020</a></p>
    </div>
    <p><input type="button" id="show_results" value="<?php echo _('Show Results') ?>"></p>
    <p><input type="button" id="hide_results" value="<?php echo _('Hide Results') ?>"></p>
    <h2 id="2023">TWC 2023</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol>
        <li>
            <img src="assets/icons/lotus.png" alt="<?php echo _('Team Lotus') ?>">
            <strong><?php echo _('Team Lotus: ') ?>36.5<?php echo _(' points') ?></strong>
        </li>
        <li>
            <img src="assets/icons/spirit.png" alt="<?php echo _('Team Spirit') ?>">
            <?php echo _('Team Spirit: ') ?>29<?php echo _(' points') ?>
        </li>
        <li>
            <img src="assets/icons/harmony.png" alt="<?php echo _('Team Harmony') ?>">
            <?php echo _('Team Harmony: ') ?>27.5<?php echo _(' points') ?>
        </li>
    </ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th rowspan="3"><?php echo _('Date / Time') ?></th>
                <th rowspan="3"><?php echo _('Category') ?></th>
                <th rowspan="3"><?php echo _('Players') ?></th>
                <th rowspan="3"><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th rowspan="3"><?php echo _('Results') ?></th>
                <th rowspan="3"><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2023"><?php
            $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
            $json = get_schedule($db, '2023');
            $schedule_2023 = json_decode($json, true);
            $json = file_get_contents('past/results_2023.json');
            $results_2023 = json_decode($json, true);
            $teams_2023 = array(
                (object) [
                    'name' => 'Spirit',
                    'image' => '<img src="assets/icons/spirit.png" alt="' . _('Team Spirit') . '">'
                ],
                (object) [
                    'name' => 'Lotus',
                    'image' => '<img src="assets/icons/lotus.png" alt="' . _('Team Lotus') . '">'
                ],
                (object) [
                    'name' => 'Harmony',
                    'image' => '<img src="assets/icons/harmony.png" alt="' . _('Team Harmony') . '">'
                ]
            );
            print_schedule($schedule_2023, $results_2023, $teams_2023, '2023');
        ?></tbody>
    </table>
    <h2 id="2022">TWC 2022</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol>
        <li>
            <img src="assets/icons/rose.png" alt="<?php echo _('Team Rose') ?>">
            <strong><?php echo _('Team Rose: ') ?>33<?php echo _(' points') ?></strong>
        </li>
        <li>
            <img src="assets/icons/heart.png" alt="<?php echo _('Team Heart') ?>">
            <?php echo _('Team Heart: ') ?>29<?php echo _(' points') ?>
        </li>
        <li>
            <img src="assets/icons/mind.png" alt="<?php echo _('Team Mind') ?>">
            <?php echo _('Team Mind: ') ?>28<?php echo _(' points') ?>
        </li>
    </ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th rowspan="3"><?php echo _('Date / Time') ?></th>
                <th rowspan="3"><?php echo _('Category') ?></th>
                <th rowspan="3"><?php echo _('Players') ?></th>
                <th rowspan="3"><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th rowspan="3"><?php echo _('Results') ?></th>
                <th rowspan="3"><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2022"><?php
            $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
            $json = get_schedule($db, '2022');
            $schedule_2022 = json_decode($json, true);
            $json = file_get_contents('past/results_2022.json');
            $results_2022 = json_decode($json, true);
            $teams_2022 = array(
                (object) [
                    'name' => 'Rose',
                    'image' => '<img src="assets/icons/rose.png" alt="' . _('Team Rose') . '">'
                ],
                (object) [
                    'name' => 'Mind',
                    'image' => '<img src="assets/icons/mind.png" alt="' . _('Team Mind') . '">'
                ],
                (object) [
                    'name' => 'Heart',
                    'image' => '<img src="assets/icons/heart.png" alt="' . _('Team Heart') . '">'
                ]
            );
            print_schedule($schedule_2022, $results_2022, $teams_2022, '2022');
        ?></tbody>
    </table>
    <h2 id="2021">TWC 2021</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol>
        <li>
            <img src='assets/icons/japan_small.png' alt='<?php echo _('Flag of Japan') ?>'>
            <strong><?php echo _('Team Japan: ') ?>32<?php echo _(' points') ?></strong>
        </li>
        <li>
            <img src='assets/icons/china_small.png' alt='<?php echo _('Flag of the P.R.C.') ?>'>
            <?php echo _('Team China: ') ?>29<?php echo _(' points') ?>
        </li>
        <li>
            <img src='assets/icons/earth.png' alt='<?php echo _('Earth') ?>'>
            <?php echo _('Team West: ') ?>23<?php echo _(' points') ?>
        </li>
    </ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th rowspan="3"><?php echo _('Date / Time') ?></th>
                <th rowspan="3"><?php echo _('Category') ?></th>
                <th rowspan="3"><?php echo _('Players') ?></th>
                <th rowspan="3"><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th rowspan="3"><?php echo _('Results') ?></th>
                <th rowspan="3"><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2021"><?php
            $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
            $json = get_schedule($db, '2021');
            $schedule_2021 = json_decode($json, true);
            $json = file_get_contents('past/results_2021.json');
            $results_2021 = json_decode($json, true);
            $teams_2021 = array(
                (object) [
                    'name' => 'West',
                    'image' => '<img src="assets/icons/earth_16px.png" alt="' . _('Earth') . '">'
                ],
                (object) [
                    'name' => 'China',
                    'image' => '<img src="assets/icons/china_16px.png" alt="' . _('Flag of the P.R.C.') . '">'
                ],
                (object) [
                    'name' => 'Japan',
                    'image' => '<img src="assets/icons/japan_16px.png" alt="' . _('Flag of Japan') . '">'
                ]
            );
            print_schedule($schedule_2021, $results_2021, $teams_2021, '2021');
        ?></tbody>
    </table>
    <p class="spoiler">* <?php echo _('Game Over') ?></p>
    <h2 id="2020">TWC 2020</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol>
        <li>
            <img src='assets/icons/japan_small.png' alt='<?php echo _('Flag of Japan') ?>'>
            <strong><?php echo _('Team Japan: ') ?>22.5<?php echo _(' points') ?></strong>
        </li>
        <li>
            <img src='assets/icons/earth.png' alt='<?php echo _('Earth') ?>'>
            <?php echo _('Team West: ') ?>13<?php echo _(' points') ?>
        </li>
        <li>
            <img src='assets/icons/china_small.png' alt='<?php echo _('Flag of the P.R.C.') ?>'>
            <?php echo _('Team China: ') ?>12.5<?php echo _(' points') ?>
        </li>
    </ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th rowspan="3"><?php echo _('Date / Time') ?></th>
                <th rowspan="3"><?php echo _('Category') ?></th>
                <th rowspan="3"><?php echo _('Players') ?></th>
                <th rowspan="3"><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th rowspan="3"><?php echo _('Results') ?></th>
                <th rowspan="3"><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2020"><?php
            $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
            $json = get_schedule($db, '2020');
            $schedule_2020 = json_decode($json, true);
            $json = file_get_contents('past/results_2020.json');
            $results_2020 = json_decode($json, true);
            $teams_2020 = $teams_2021;
            print_schedule($schedule_2020, $results_2020, $teams_2020, '2020');
        ?></tbody>
    </table>
    <p class="spoiler">* <?php echo _('Game Over') ?></p>
    <p class="spoiler"><a href="#top"><?php echo _('Back to Top') ?></a></p>
	</main>
</body>
</html>
