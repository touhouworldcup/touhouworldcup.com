<!doctype html>

<?php include 'locale.php' ?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo _('Credits') ?> - Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="Credits to the creators of this website" />
	<meta property="og:site_name" content="Touhou World Cup" />
	<meta property="og:image" content="/twc.png" />
</head>

<body>
	<header class="header">
	<a href="/" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a href="rules"><?php echo _('Rules') ?></a></li>
		<li><a href="schedule"><?php echo _('Schedule') ?></a></li>
		<li><a href="iscore"><?php echo _('ISCORE') ?></a></li>
		<li><a href="credits"><?php echo _('Credits') ?></a></li>
	</ul>
	</header>
	<div class="moverdowner"></div>
	<main>
	<h1><?php echo _('Credits') ?></h1>
	<h2><a href="https://github.com/touhouworldcup/touhouworldcup.github.io">Website Source Code</a></h2>
	<p>Developed by: <ul class="list">
        <li><a href="https://www.youtube.com/channel/UChyVpooBi31k3xPbWYsoq3w">32th System</a></li>
        <li><a href="https://twitter.com/MaribelHearn42">Maribel Hearn</a></li>
    </ul></p>
	</main>
</body>
</html>
