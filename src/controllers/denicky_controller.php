<?php

class Denicky
{
    private function data_denicku_jsou_v_poradku(){
        if(!isset($_POST["denicek"]))
            return false;
        if($_POST["denicek"] == "")
            return false;

        return true;
    }

    public function vytvorit(){
        if($this->data_denicku_jsou_v_poradku()){
            $jmeno = $_SESSION["prihlaseny_uzivatel"];
            $data = $_POST["denicek"];
            $denicky = Denicek::vytvorit_data_denicku($data, $jmeno);
        }
        else{
            require_once "views/denicky/vytvorit.php";
        }
    }

    public function zobrazit(){
        
    }
}