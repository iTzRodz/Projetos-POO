<?php
class Login{
    protected $usuario;
    protected $senha;

    public function __construct($usuario, $senha) {
        $this->setUsuario($usuario);
        $this->setSenha($senha);
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($pass) {
        $this->senha = $pass;
    }

    public function getUsuario() {
        return $this->$usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function Logar() {
        if ($this->usuario == "abcd" and $this->senha =="12345") {
            echo "<br>Dados de login corretos";        
        }else{
            echo "<br>Dados de login incorretos";
        }
    }
}

$pc = new Login("abcd", "12345");
$pc->Logar();
?>