<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

Class Produto{
    private $id;
    private $nome;
    private $descricao;
    private $precoFornecedor;
    private $precoVenda;
    private $quantidadeEstoque;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPrecoFornecedor() {
        return $this->precoFornecedor;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function getQuantidadeEstoque() {
        return $this->quantidadeEstoque;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setPrecoFornecedor($precoFornecedor): void {
        $this->precoFornecedor = $precoFornecedor;
    }

    public function setPrecoVenda($precoVenda): void {
        $this->precoVenda = $precoVenda;
    }

    public function setQuantidadeEstoque($quantidadeEstoque): void {
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    function toString(){
        return $this->nome;
    }
}