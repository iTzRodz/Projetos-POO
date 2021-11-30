<?php
echo "<h1> Dados dos Computadores!! </h1>";

class Computador{
    public  $primeiro_app;
    public  $segundo_app;
    public  $tamanhoAPP01;
    public  $tamanhoAPP02;
    public  $cpu;
    public  $clock;
    public  $memoria;
    public  $armazenamento;
    public  $pcLigado;
    public  $appAberto;
    public  $programas_exe = array ("Word", "Paint", "LoL", "R6", "Valorant", 
    "Youtube", "Twitter", "Facebook", "AWS", "Azure", "Netflix", "HBO", "HBO max" );
    
    public function __construct($processador, $clock, $ram, $armazenamento, $pcLigado, $appLigado) {
        $this->cpu = $processador;
        $this->clock = $clock;
        $this->memoria = $ram;
        $this->armazenamento = $armazenamento;
        $this->pcLigado = $pcLigado;
        $this->appAberto = $appLigado;

        echo "CPU: {$this->cpu} {$this->clock}ghz<br> 
        Memoria Ram: {$this->memoria}mb<br>
        Armazenamento: {$this->armazenamento}mb.<br>";   
    }
    
    public function nomeAPP1() {
        $this->primeiro_app = rand(0,12);
        return $this->primeiro_app;
    }

    public function tamanhoAPP1() {
        $this->tamanhoAPP01 = rand(5,13);
        return $this->tamanhoAPP01;
    }

    public function nomeAPP2() {
        $this->segundo_app = rand(0,12);
        return $this->segundo_app;
    }

    public function tamanhoAPP2() {
        $this->tamanhoAPP02 = rand(7,13);
        return $this->tamanhoAPP02;
    }

    public function mostrarStatus() { 
        if($this->pcLigado) {           
            require_once("login.php");
            echo "<br> O computador está ligando <br>";
        } else {
            echo "<br> O computador está desligando<br>";
        }
    } 

    public function Ligado() {
        if (!$this->pcLigado) { 
            $this->pcLigado = true; 
        }  
        $this -> mostrarStatus();   
    }      

    public function Desligado() {
        if ($this->pcLigado) {
           $this->pcLigado = false; 
        }           
       $this -> mostrarStatus();
    }              
    
    public function usoDeRam() {
        $this->memoria;    
        $ramAPP01 = $this->tamanhoAPP1();
        $ramAPP02 = $this->tamanhoAPP2();
        
        if ($this->pcLigado == true) {
            if ($this->appAberto != false) {
                $ram_disponivel = ($ramAPP01 * 100) / $this->memoria;   
                echo "Caro usuario você está usando {$ramAPP01}mb de memoria ram " . number_format($ram_disponivel,1) . "%<br>";
                return number_format($ram_disponivel,1);   
            } else {
                $ram_disponivel = ($ramAPP01 * 100) / $this->memoria;   
                echo "Computador está utilizando {$ramAPP02}mb de memoria ram " . number_format($ram_disponivel,1) . "%<br>";
                return number_format($ram_disponivel, 1);
                }
            }    
    }

    public function status_programa() {
        $primeiro_aplicativo = $this->nomeAPP1();
        $segundo_aplicativo = $this->nomeAPP2();
        $ram_usadaAPP2 = $this->tamanhoAPP2();
        
        if ($this->pcLigado == true) {
            echo "<h3> Status </h3>"; 
            if ($this->appAberto == true) {
                echo "Seu computador não conseguirá abrir ({$this->programas_exe[$segundo_aplicativo]}) pois ele utiliza {$ram_usadaAPP2}mb.<br>
                Por favor feche seu aplicativo atual ({$this->programas_exe[$primeiro_aplicativo]}).<br>";
                $this->usoDeRam();
            } else {
                echo "Aplicativo carregando...<br>{$this->programas_exe[$segundo_aplicativo]} está aberto.<br>";
                $this->usoDeRam();
            }
        } else {
            echo "";
            }   
    }

    public function appAberto() {
        if (!$this->appAberto) {
            $this->appAberto = true;            
        }  
        $this -> status_programa();   
    }      

    public function appFechado() {
        if ($this->appAberto){
           $this->appAberto = false; 
        }           
       $this -> status_programa();
    }           
} 

$comp = new Computador("i3 10100", 1, 13, 15, true, true); 
$comp->mostrarStatus();
$comp->status_programa();
?>