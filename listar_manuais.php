<?php
$diretorio = 'manuais/';
$arquivos = array_diff(scandir($diretorio), ['.', '..']);

$pdfs = array_filter($arquivos, function($arq) use ($diretorio) {
    return is_file($diretorio . $arq) && pathinfo($arq, PATHINFO_EXTENSION) === 'pdf';
});

header('Content-Type: application/json');
echo json_encode(array_values($pdfs));
?>
