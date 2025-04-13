<?php
$arquivo = $_GET['file'] ?? '';

$arquivo = basename($arquivo); // previne acesso a caminhos externos

$caminho = __DIR__ . "/manuais/$arquivo";

if (file_exists($caminho)) {
    header("Content-Type: application/pdf");
    readfile($caminho);
    exit;
}

http_response_code(404);
echo "Arquivo ou diretório não encontrado.";