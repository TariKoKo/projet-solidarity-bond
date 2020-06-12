<?php
    session_start();
    session_destroy();
    header('Location: pageIndex.php');
	exit();
?>