<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author Aluno
 */
class Usuario {
    private $id;
    private $nome;
    private $login;
    private $email;
    private $senha;
    private $foto;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setFoto($foto): void {
        $this->foto = $foto;
    }

    function toString(){
        return $this->nome;
    }
}
