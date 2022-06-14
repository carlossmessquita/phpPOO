<?php

    require 'autoload.php';


    use Alura\Banco\Modelo\Endereco;
    use Alura\Banco\Modelo\Funcionario;
    use Alura\Banco\Modelo\Pessoa;
    use Alura\Banco\Modelo\Conta\Conta;
    use Alura\Banco\Modelo\Conta\Titular;

    $enderecoCarlos = new Endereco("Fortress", "Parkland", "Peter War", "69A");
    $titularCarlos = new Titular("Carlos Mesquita", "12345678910", $enderecoCarlos);
    $contaCarlos = new Conta($titularCarlos, "1122");
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Banco em Branco</h1>
    <p>Nome do Titular: <?php echo $contaCarlos -> getTitular(); ?></p>
    
    <p>Nº da Conta: <?php echo $contaCarlos -> getNumeroConta(); ?></p>

    <p>Saldo (R$): <?php echo $contaCarlos -> getSaldo(); ?></p>
</body>
</html>


    

