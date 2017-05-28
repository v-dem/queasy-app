<?php

// Means that the parent folder is the main Queasy folder
define('QUEASY_DIR', dirname(dirname(__FILE__)));

// Means that the parent folder is the main Queasy folder
define('VENDOR_DIR', sprintf('%s%s%s', QUEASY_DIR, DIRECTORY_SEPARATOR, 'vendor'));

// Include Queasy bootstrapping file
@require_once(
    sprintf(
        '%s%sv-dem%squeasy-core%ssrc%sbootstrap.php',
        DIRECTORY_SEPARATOR, VENDOR_DIR, DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR
    )
);

