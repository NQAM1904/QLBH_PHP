<?php require_once VADMIN . "/_header.php"; ?>
<div id="content-wrapper">

    <?php
    if (file_exists(VADMIN . $controller . "_" . $action . ".php")) {
        require_once(VADMIN . $controller . "_" . $action . ".php");
    }
    ?>
    <?php require_once VADMIN . "/_footer.php"; ?>