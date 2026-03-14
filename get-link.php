<?php
// Evitar cache no navegador e em proxies
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
header('Content-Type: text/plain');

// Caminho absoluto para o arquivo de texto
$arquivo = __DIR__ . '/whatsapp-link.txt';

// Verifica se o arquivo existe
if (file_exists($arquivo)) {
    // Lê o conteúdo, remove espaços extras no início/fim e quebras de linha
    $link = trim(file_get_contents($arquivo));
    
    // Se o link não estiver vazio, exibe ele
    if (!empty($link)) {
        echo $link;
    } else {
        // Se o arquivo estiver vazio, usa um link padrão (fallback)
        echo 'https://chat.whatsapp.com/Ll27GYa5W0fDZZ5PnGy2Hc';
    }
} else {
    // Se o arquivo não existir, usa o link padrão
    echo 'https://chat.whatsapp.com/Ll27GYa5W0fDZZ5PnGy2Hc';
}
?>