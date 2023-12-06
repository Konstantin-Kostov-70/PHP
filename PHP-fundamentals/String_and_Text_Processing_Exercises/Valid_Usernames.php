<?php
$usernames = explode(', ', readline());

$validUsernames = array_filter($usernames, function ($username) {
    return preg_match('/^[a-zA-Z0-9_-]{3,16}$/', $username);
});


