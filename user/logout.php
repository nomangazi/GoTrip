<?php

// Start the session
session_start();

// Remove all session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header("Location: /gotrip");
exit;
