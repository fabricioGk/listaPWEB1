<?php

    $nome = $_POST['nome'];
    $end = $_POST['end'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];

    echo "\n";
    echo "\n Variaveis";

    echo  nl2br ( "\n Nome: $nome \n" );
    echo  nl2br ( "Endereco: $end \n" );
    echo  nl2br ( "Cidade: $cidade \n" );
    echo  nl2br ( "Estado: $estado \n" );
    echo  nl2br ( "CEP: $cep \n" );
    echo  nl2br ( "Telefone: $tel \n" );
    echo  nl2br ( "Celular: $cel \n\n" );

    define ( "rg" , $_POST ['rg']);
    define ( "cpf" , $_POST ['cpf']);
    define ( "pis" , $_POST ['pis']);

    print "\n";
    print "\n Constantes \n";

    echo  nl2br ( "\n RG ->" .rg);
    echo  nl2br ( "\n CPF ->" .cpf);
    echo  nl2br ( "\n PIS ->" .pis);

?>