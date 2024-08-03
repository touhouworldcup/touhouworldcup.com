<?php
    $title = 'Index';
    $description = 'Main page of the official Touhou World Cup website';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament';
?>

<!DOCTYPE html>
<html id="top" lang="<?php echo $lc ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $title != 'Index' ? $title . ' - ' : '' ?>Touhou World Cup</title>
	<link rel="stylesheet" href="/php/css_concat.php?page=<?php echo str_replace(".php", "", substr(strtok($_SERVER["REQUEST_URI"], '?'), 1)) ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup">
	<meta property="og:description" content="<?php echo $description ?>">
	<meta property="og:site_name" content="Touhou World Cup">
	<meta property="og:image" content="/assets/icons/twc.png">
    <script src="/php/js_concat.php?page=<?php echo str_replace(".php", "", substr(strtok($_SERVER["REQUEST_URI"], '?'), 1)) ?>" defer></script>
</head>
