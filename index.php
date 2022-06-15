<?php

    require 'autoload.php';


    use Alura\Banco\Modelo\{Endereco, Funcionario, Pessoa}; 
    use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca};
   

    $enderecoCarlos = new Endereco("Fortress", "Parkland", "Peter War", "69A");
    $titularCarlos = new Titular("Carlos Mesquita", "12345678910", $enderecoCarlos);
    $contaCarlos = new ContaPoupanca($titularCarlos, "1122");

    $contaCarlos -> setSaldo(100.0);

    $contaCarlos -> saque(10.0);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarlosBank</title>
</head>
<body>
    <h1>CarlosBank</h1>
    <p>Nome do Titular: <?php echo $contaCarlos -> getTitular(); ?></p>
    
    <p>Nº da Conta: <?php echo $contaCarlos -> getNumeroConta(); ?></p>

    <p>Saldo (R$): <?php echo $contaCarlos -> getSaldo(); ?></p>
</body>
</html>


    

