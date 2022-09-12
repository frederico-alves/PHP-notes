<?php

setcookie('name', 'Frederico', time() + 86400 * 30); // 86400 = 1 day

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// Unsets the cookie
setcookie('name', '', time() - 86400);