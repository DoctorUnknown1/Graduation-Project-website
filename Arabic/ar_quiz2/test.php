<?php
session_start();

// Get the current session ID
$currentSessionID = session_id();

// Regenerate the session ID
session_regenerate_id(true);

// Get the new session ID after regeneration
$newSessionID = session_id();

// Check if the session ID has changed
if ($currentSessionID !== $newSessionID) {
    echo "Session ID has changed.";
} else {
    echo "Session ID remains the same.";
}
?>
