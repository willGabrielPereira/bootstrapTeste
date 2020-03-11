<?php
    $header = "<h1>Teste aqui!</h1>";

    
    class Opcao{
        public $opType;
        public $texto;
        public $link;
        public $srOnly;
        public $dropdown;
    }
    
    class Dropdown{
        public $texto;
        public $link;
    }
    
    
    $opcoes = array();
    
    // normais
    $op = $opcoes[] = new Opcao();
    $op->opType = "normal";
    $op->texto = "Teste";
    $op->link = "?";
    
    $op = $opcoes[] = new Opcao();
    $op->opType = "normal";
    $op->texto = "Teste2";
    $op->link = "?";
    
    // dropdown
    $op = $opcoes[] = new Opcao();
    $op->opType = "dropdown";
    $op->texto = "drop";
    
    $p = array();
    $o = $p[] = new Dropdown();
    $o->link = "#";
    $o->texto = "down";
    $o = $p[] = new Dropdown();
    $o->link = "#";
    $o->texto = "down2";
    $o = $p[] = new Dropdown();
    $o->link = "#";
    $o->texto = "down3";
    
    $op->dropdown = $p;
    
    $op = $opcoes[] = new Opcao();
    $op->opType = "normal";
    $op->texto = "Teste3";
    $op->link = "?";