<?php
    function error_title($error_code) {
        switch ($error_code) {
            case '400': return '400 Bad Request';
            case '403': return '403 Forbidden';
            case '500': return '500 Internal Server Error';
            case '503': return '503 Service Unavailable';
            default: return '404 Not Found';
        }
    }
    function error_text($error_code) {
        switch ($error_code) {
            case '400': return _('Your browser sent a request that this server could not understand.');
            case '403': return _('You do not have permission to access this resource.');
            case '500': return _('The server encountered an internal error or misconfiguration and was unable to complete your request.');
            case '503': return _('The server could not handle your request.');
            default: return _('The requested URL was not found on the server.');
        }
    }
    $title = _('Error');
    include_once 'locale.php';
    include_once 'head.php';
?>

<body>
	<?php include_once 'body.php' ?>
    <main>
	<h1><?php echo error_title($_GET['error']) ?></h1>
    <p><?php
        echo error_text($_GET['error']);
    ?></p>
    <p><a href="/"><?php echo _('Back to main page') ?></a></p>
	</main>
</body>
</html>
