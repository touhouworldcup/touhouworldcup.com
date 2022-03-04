<?php
    $title = 'Index';
    $description = 'Main page of the official Touhou World Cup website';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1>Touhou World Cup</h1>
    <p><?php
        echo _('<strong>Touhou World Cup (TWC)</strong> is an annual international Touhou shooting game competition, ' .
        'first held in 2020, organised by the Chinese gameplay community. ' .
        'This time around, in 2021, it is organised by the Western gameplay community.');
    ?></p>
    <p><?php
        echo _('Three teams, a Western community team, a Chinese team, and a Japanese team, duke it out ' .
        'on Lunatic and Extra mode, playing on live streams and playing both high score and survival.');
    ?></p>
    <p><?php
        echo _('See below for official communication channels and live streams with commentary.');
    ?></p>
	<ul class="list">
		<li><a href="https://twitter.com/touhouworldcup"><?php echo _('Official TWC Twitter') ?></a></li>
		<li><a href="https://www.youtube.com/channel/UCk8o-jk-Zpn4CEmLUIkui0A"><?php echo _('Official TWC YouTube Channel') ?></a></li>
		<li><a href="https://www.twitch.tv/touhou_replay_showcase"><?php echo _('English commentary stream (Twitch)') ?></a></li>
		<li><a href="https://live.bilibili.com/22478102?share_source=copy_link"><?php echo _('Chinese commentary stream 1 (Bilibili)') ?></a></li>
		<li><a href="https://live.bilibili.com/14315174?share_source=copy_link"><?php echo _('Chinese commentary stream 2 (Bilibili)') ?></a></li>
		<li><a href="https://www.youtube.com/channel/UCfF3O4wo0YxppTZGmtTGDwg"><?php echo _('Japanese commentary stream (YouTube)') ?></a></li>
		<li><a class="dead" href="https://www.twitch.tv/touhou_russian_kolkhoz"><?php echo _('Russian commentary stream (Twitch)') ?></a></li>
	</ul>
	</main>
</body>
</html>
