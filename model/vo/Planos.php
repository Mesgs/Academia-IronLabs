<?php


class Planos {
    
     private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $validade;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function getValidade() {
        return $this->validade;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setValidade($validade) {
        $this->validade = $validade;
    }

    function toString(){
         return $this->nome;
 }

  

 
}
