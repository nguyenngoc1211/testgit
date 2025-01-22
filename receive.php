<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cacheData = $_POST['cache_data'] ?? 'No data received';
    echo "Received: " . htmlspecialchars($cacheData);
} else {
    echo "Send a POST request with 'cache_data'.";
}
?>

