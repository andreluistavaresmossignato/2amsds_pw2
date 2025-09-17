<?php
 // Main.php -> Será um arquivo para teste
 require_once 'model/Cliente.php';
 require_once 'model/Produto.php';

 // Simular a criação de dois clientes e exibir seus dados
 $cliente1 = new Cliente(1, "João Silva");
 $cliente2 = new Cliente(2, "Maria Oliveira");

 //exibindo detalhes de dois clientes

 echo $cliente1 -> exibirDetalhes();
 echo $cliente2 -> exibirDetalhes();
 
 //Simular a criaçao de dois produtos e exibir seus dados.
$produto1 = new Produto(101, "Notebook", 3500.00);
$produto2 = new Produto(102, "Smatphone", 1500.00);

//Exibindo os detalhes do Produto 
echo $produto1 -> exibirDetalhes();
echo $produto2 -> exibirDetalhes();
