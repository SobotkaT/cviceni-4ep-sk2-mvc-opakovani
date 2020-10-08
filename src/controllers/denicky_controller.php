<?php

class Denicky
{
    private function data_denicku_jsou_v_poradku($text){
        if($text != ""){
            return true;
        }else{
            return false;
        }
    }

    public function vytvorit($jmeno){
        $textDenicku = trim($_POST["denicek"]);

        if($this->data_denicku_jsou_v_poradku($textDenicku)){
            $denicek = new Denicek($textDenicku, $jmeno);
            return spustit("denicky", "zobrazit");
        }
        else{
            return spustit("stranky", "chyba");
        }
    }

    public function zobrazit(){
        require_once "views/denicky/zobrazit/";
    }

    /*public function zobrazit_denicek($jmeno)
    {
        // bud se zpracuje registracni formular, nebo se zobrazi
        if($this->mam_dostatek_dat_k_registraci())
        {
            $jmeno = trim($_POST["jmeno"]);
            $heslo = trim($_POST["heslo"]);
            $heslo_znovu = trim($_POST["heslo_znovu"]);

            if($this->registracni_data_jsou_v_poradku($jmeno, $heslo, $heslo_znovu))
            {
                // dochazi k registraci uzivatele
                $uzivatel = new Uzivatel($jmeno, password_hash($heslo, PASSWORD_DEFAULT));

                if($uzivatel->registruj_se())
                {
                    // uzivatel je uspesne registrovan
                    // presmeruju ho na prihlaseni
                    return spustit("uzivatele", "prihlasit");
                }
                else
                {
                    // registrace selhala na urovni modelu
                    return spustit("stranky", "chyba");
                }
            }
            else
            {
                // data ve formulari nejsou v poradku
                require_once "views/uzivatele/registrovat.php";
            }
        }
        else
        {
            // data ve formulari nejsou kompletni
            require_once "views/uzivatele/registrovat.php";
        }
    }*/
}