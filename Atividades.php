<?php
//ATIVIDADE 1
class Produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes(){
        echo "<strong>Nome:</strong> ". $this->nome .", <strong>Preço:</strong> ". $this->preco . ", <strong>Quantidade:</strong> ". $this->quantidade . "<br> <br>";
    }
}


$produto1 = new Produto();

$produto1 -> nome = "Abacaxi";
$produto1 -> preco = 2.50;
$produto1 -> quantidade = 666;

$produto1->exibirInformacoes();

//ATIVIDADE 2 Exercício 2 – Criando objetos e atribuindo valores
//Agora que você já tem a classe Produto, crie um arquivo PHP separado (ou abaixo do anterior) para:
//1.	Instanciar dois objetos da classe Produto
//2.	Atribuir valores diferentes para nome, preco e quantidade
//3.	Chamar o método exibirInformacoes() para cada objeto
//Dica: use a seta -> para acessar atributos e métodos.


?>