<?php
// Ottieni l'URL delle note dalla query string
$noteUrl = $_GET['url'];

// Estrarre il percorso dell'URL
$path = parse_url($noteUrl, PHP_URL_PATH);
$query = parse_url($noteUrl, PHP_URL_QUERY);

// Unire il percorso e i parametri per ottenere il nome del file completo
$fileName = $path . '?' . $query;

$url = 'https://phpfciksport.kgroup.eu/' . $fileName;

// Esegui una richiesta GET all'URL delle note
$noteContent = file_get_contents($url);

// Restituisci il contenuto delle note
echo $noteContent;
?>
