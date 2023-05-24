<?php
// Ottieni il parametro di ricerca dalla richiesta AJAX
$searchParam = $_POST['strng'];

// Esegui la chiamata HTTP POST all'URL desiderato
$url = 'https://phpfciksport.kgroup.eu/guide.php';
$data = array('strng' => $searchParam);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Restituisci l'output come risposta alla richiesta AJAX
echo $result;
?>
