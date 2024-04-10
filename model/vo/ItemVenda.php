<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ItmVenda
 *
 * @author Aluno
 */
class ItemVenda {
    private $id;
    private $precoUnitario;
    private $quantidade;
    private $idVenda;
    private $idProduto;
    
    public function getId() {
        return $this->id;
    }

    public function getPrecoUnitario() {
        return $this->precoUnitario;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getIdVenda() {
        return $this->idVenda;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setPrecoUnitario($precoUnitario): void {
        $this->precoUnitario = $precoUnitario;
    }

    public function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function setIdVenda($idVenda): void {
        $this->idVenda = $idVenda;
    }

    public function setIdProduto($idProduto): void {
        $this->idProduto = $idProduto;
    }

    function toString(){
        return $this->precoUnitario;
    }
    
}
