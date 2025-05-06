<?php
     require_once 'Atividades.php';
     $produto2 = new Produto();
     $produto3 = new Produto();

     $produto2 -> nome = "Cocada";
     $produto2 -> preco = 5.50;
     $produto2 -> quantidade = 333;

    $produto3 -> nome = "Abacate";
    $produto3 -> preco = 10.50;
    $produto3 -> quantidade = 999;

    $produto2->exibirInformacoes();
    $produto3->exibirInformacoes();

    
function mostrarMediaPrecos($produto1, $produto2) {
    
    $mediaaaaaa = ($produto1->preco + $produto2->preco) / 2;
    return $mediaaaaaa;
}


echo "<strong>Média:</strong> ". mostrarMediaPrecos($produto1, $produto2);

    
     ?>