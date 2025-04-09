<?php
$url = "https://api101.up.railway.app/joke/3";
$response = file_get_contents($url);
$data = json_decode($response, true);

if ($data && is_array($data)) {
    echo "<ul>";
    foreach ($data as $joke) {
        echo "<li>" . htmlspecialchars($joke['joke']) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No s'ha pogut obtenir les bromes.";
}
?>
