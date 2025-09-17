<?php
require_once 'Produto.php';
class Carrinho{
    //Array para armazenar os produtos no carrinho
    private array $produtos = [];

    //Metodo para adicionar um  produto ao carrinho.
    public function adicionarProduto(Produto $produto): void {
        $this -> $produto[] = $produto;
    }
    //Metodo para retornar os produtos ao carrinho. (No carrino)
    public function getProdutos(): array {
        return $this->produtos;
    }
    // Método para retornar o valor total do carrinho
    public function getTotal(): float {
        $total = 0.0;
        foreach ($this->produtos as $produto){
            $total += $produto->getPreco();
        }
        return $total;
    }
}