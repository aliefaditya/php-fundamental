<?php
session_start();
session_unset("loggedIn");
header("Location: login_1301174055.php");
session_destroy();
?>