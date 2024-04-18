<?php

?>

<html>
    <head>
        <h1>Lista de Nomes</h1>
    </head>
    <body>
        <form method="POST" action="validateForm.php">
            <input type="text" name="nome">
            <input type="submit" value="Adicionar">
        </form>
        <section>
            <h2>Lista de Nomes</h2>
            <ul>
               <?php
                    $nomesDoArquivoTexto = file_get_contents('texto.txt');
                    if(!empty($nomesDoArquivoTexto)){
                        $listaDeNomes = explode("\n",$nomesDoArquivoTexto);
                        foreach($listaDeNomes as $nome)
                        {
                            echo '<li>'.$nome.'</li>';
                        }
                    };
                    
               ?>
            </ul>
        </section>
    </body>
</html>