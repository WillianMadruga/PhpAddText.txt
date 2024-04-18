<?php
$nomeInput = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$arquivoNomes = file_get_contents('texto.txt');



if(empty($nomeInput)){
    header('Location: index.php');
    exit;
}else{
    $arquivoNomes .="\n$nomeInput";
    file_put_contents('texto.txt', $arquivoNomes);
    
}
header('Location: index.php');
    exit;

?>