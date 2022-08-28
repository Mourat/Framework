<?php

/**
 * @var $errNo ErrorHandler
 * @var $errStr ErrorHandler
 * @var $errFile ErrorHandler
 * @var $errLine ErrorHandler
 */

use core\ErrorHandler;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>

<h1>Error</h1>
<p><b>Code:</b> <?= $errNo ?></p>
<p><b>Description:</b> <?= $errStr ?></p>
<p><b>Location:</b> <?= $errFile ?></p>
<p><b>Line:</b> <?= $errLine ?></p>

</body>
</html>
