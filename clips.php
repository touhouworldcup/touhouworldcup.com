<?php
    $title = _('Clips');
    $description = 'Touhou World Cup live stream clips';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2026, competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/db.php';
    try {
		$db_host = getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost';
        $db = mysqli_connect($db_host, 'twc_admin', getenv('DB_PASSWORD'), 'twc');
    } catch (Exception $e) {
        $_GET['error'] = 503;
        include_once 'php/error.php';
        die();
    }
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1><?php echo _('Clips') ?></h1>
    <h2 class="contents"><?php echo _('Contents') ?></h2>
    <p><?php echo _('Choose a match to show its clips. The clips are in English only.') ?></p>
    <select id="select_clip">
        <option value="">...</option>
        <?php
            $json = get_clips_matches($db);
            $matches = json_decode($json, true);
            foreach ($matches as $key => $obj) {
                echo '<option value="' . $obj['Match'] . '">' . $obj['Match'] . '</option>';
            }
        ?>
    </select>
    <ul id="match_clips"></ul>
    <p><?php echo _('Alternatively, click this button to show a randomly selected clip.') ?></p>
    <p><input id="random_clip" type="button" value="<?php echo _('Show Random Clip') ?>"></p>
    <iframe id="embed" referrerpolicy="strict-origin-when-cross-origin" height=768 width=1024 allowfullscreen></iframe>
	</main>
</body>
</html>
