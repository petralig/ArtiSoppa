<?php
session_start();
require_once('config/config.php');
// SSLon();
session_destroy();
redirect("index.php");
?>