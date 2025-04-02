<?php
function redirect($url) {
    header("Location: " . $url);
    exit();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function formatPrice($price) {
    return '$' . number_format($price, 2);
} 