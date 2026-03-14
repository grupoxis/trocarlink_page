<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['novo_link'])) {
    $novo_link = trim($_POST['novo_link']);
    // Validação simples: deve começar com o domínio do WhatsApp
    if (strpos($novo_link, 'https://chat.whatsapp.com/') === 0) {
        file_put_contents(__DIR__ . '/whatsapp-link.txt', $novo_link);
        echo "Link atualizado com sucesso! <a href='/'>Voltar para home</a>";
    } else {
        echo "Link inválido. Certifique-se de que é um link de grupo do WhatsApp (começa com https://chat.whatsapp.com/).";
    }
} else {
    echo "Método não permitido.";
}
?>