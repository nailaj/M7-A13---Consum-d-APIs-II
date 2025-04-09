<?php
$url = 'https://api101.up.railway.app/joke';

$data = array(
    'author' => $_POST['author'],
    'joke' => $_POST['joke'],
    'source' => $_POST['source']
);
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Error al realitzar la sol·licitud: ' . curl_error($ch);
} else {
    $json_response = json_decode($response, true);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>crear broma</title>
</head>
<body>
    <h1>afegir broma</h1>
    <form method="post">
        <label>author:</label>
        <input type="text" name="author" required><br>
        <label>joke:</label>
        <input type="text" name="joke"><br>
        <label>source:</label>
        <input type="text" name="source" required><br>
        <button type="submit">Afegir</button>
    </form>
</body>
</html>