<?php
require_once("config.php");
unset($_SESSION['usuario']);
header("Location: " . URL);
exit();