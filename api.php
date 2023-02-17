<?php
// connecting DB
require($_SERVER['DOCUMENT_ROOT'].'/configs/db.php');

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'like':
            $page = 'like';
            break;

        default:
            $page = 'home';
            break;
    }
}

// connect the page depending on the request
require($_SERVER['DOCUMENT_ROOT']."/api/". $page . ".php");

?>