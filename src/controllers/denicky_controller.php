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
            return spustit("denicky","zobrazit");
        }
        else{
            require_once "views/denicky/vytvorit.php";
        }
    }

    public function zobrazit(){
        $jmeno = $_SESSION["prihlaseny_uzivatel"];
        $denicky = Denicek::vybrat_data_denicku($jmeno);
        $_SESSION["denicek"] = $denicky;
        require_once "views/denicky/zobrazit.php";
    }
}