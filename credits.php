<?php
    $title = _('Credits');
    $description = 'Credits to the creators of this website';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1><?php echo _('Credits') ?></h1>
	<h2><a href="https://github.com/touhouworldcup/touhouworldcup.com"><?php echo _('Website Source Code') ?></a></h2>
	<p><?php echo _('Developed by:') ?></p>
    <ul class="list">
        <li><a href="https://www.youtube.com/channel/UChyVpooBi31k3xPbWYsoq3w" target="_blank">32th System</a></li>
        <li><a href="https://twitter.com/MaribelHearn42" target="_blank">Maribel Hearn</a></li>
    </ul>
	<p><?php echo _('Translated by:') ?></p>
    <ul class="list">
        <li><a href="https://twitter.com/toho_yumiya" target="_blank"><?php echo ($lang == 'ja_JP' ? 'ゆーみや' : 'Yu-miya') ?></a><?php echo _(': Japanese') ?></li>
        <li><a href="https://space.bilibili.com/107846194" target="_blank">Komeiji Compiler</a>, <a href="https://twitter.com/Rivers10000">Peigo</a><?php echo _(': Chinese') ?></li>
        <li><a href="https://www.youtube.com/channel/UCNPSmt1Jpm-SbyrhlIWhmUw" target="_blank">Acaride</a><?php echo _(': Russian') ?></li>
        <li><a href="https://twitter.com/Kawaii_Shadowii" target="_blank">Kawaii_Shadowii</a><?php echo _(': German') ?></li>
        <li><a href="https://twitter.com/POfBoundaries" target="_blank">Paradise of Boundaries</a> (Chise, Fumiko, Orphen Nightford)<?php echo _(': Spanish') ?></li>
    </ul>
    <p><?php echo _('Artwork:')?></p>
    <ul class="list">
        <li>Evernyta: Touhou World Cup artwork</li>
        <li>ZUN: Character artwork</li>
    </ul>
	</main>
</body>
</html>
