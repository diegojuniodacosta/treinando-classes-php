<?php

// Vamos criar o autoload

spl_autoload_register(function (string $NomeCompletoDaClasse1) {

    // Vamos guardar em uma variável ($caminhoArquivo):

    // Substituir o namespace pelo namespace raiz
    // Namespace raiz = é a pasta raiz onde todos os arquivos estão localizados
    $caminhoArquivo = str_replace('Diego','produtos', $NomeCompletoDaClasse1);

    // Substituir a '\\' por '/'
    // Na separação das pastas é utilizado '/'
    $caminhoArquivo = str_replace('\\', '/', $caminhoArquivo);

    // Vamos informar que todos os arquivos devem terminar com '.php'
    $caminhoArquivo .= '.php';

    // Se existir o arquivo na variável $caminhoArquivo
    if (file_exists($caminhoArquivo)){
        // Irá incluir o arquivo
        require_once $caminhoArquivo;
   }
});
