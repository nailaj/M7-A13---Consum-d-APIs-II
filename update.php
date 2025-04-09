<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $url = "https://api101.up.railway.app/joke_/4" . $_POST['id']; 
    $data = array(
        'author' => $_POST['author'],
        'joke' => $_POST['joke'],
        'source' => $_POST['source']
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    if(curl_errno($ch)) {
        echo 'Error al realitzar la sol·licitud: ' . curl_error($ch);
    } else {  
        echo "Broma actualitzada correctament!";
    }
    curl_close($ch);
}
?>
<form method="post">
    <label>ID de la Broma:</label>
    <input type="text" name="id" required><br>
    <label>Author:</label>
    <input type="text" name="author" required><br>
    <label>Broma:</label>
    <input type="text" name="joke" required><br>
    <label>Source:</label>
    <input type="text" name="source" required><br>
    <button type="submit">update de la Broma</button>
</form>
