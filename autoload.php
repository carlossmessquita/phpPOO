<?php 

spl_autoload_register(function (string $nomeCompletoClasse){

    $camminhoArquivo = str_replace("Alura\\Banco", 'src', $nomeCompletoClasse);
    $camminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $camminhoArquivo);
    $camminhoArquivo .= '.php';

    if (file_exists($camminhoArquivo))
    {
        require_once $camminhoArquivo;
    }
   
});
