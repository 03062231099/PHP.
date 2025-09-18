<?php
function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP từ Share Internet
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP từ Proxy
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // IP từ Remote Address
        return $_SERVER['REMOTE_ADDR'];
    }
}

echo "Client IP: " .getClientIP();
?>