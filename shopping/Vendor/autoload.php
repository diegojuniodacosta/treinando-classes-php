<?php

// Vamos criar o autoload

    spl_autoload_register(function (string $NomeCompletoDaClasse) {

        $caminhoArquivo = str_replace('App', 'shopping', $NomeCompletoDaClasse);

        $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);

        $caminhoArquivo .= '.php';

        // Se existir o arquivo na variável $caminhoArquivo
        if (file_exists($caminhoArquivo)) {
            // Irá incluir o arquivo
            require_once $caminhoArquivo;
        }
});
