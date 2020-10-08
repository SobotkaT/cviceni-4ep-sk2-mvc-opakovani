<?php

// co je povoleno (implementovano v aplikaci)
$povolene_controllery_a_akce = array(
    "stranky" => array(
        "domu",
        "chyba",
        "profil",
        "denicek",
    ),
    "uzivatele" => array(
        "registrovat",
        "prihlasit",
        "odhlasit",
    ),
);

// osetreni pro nezadany controller nebo akci
if($controller == null || $akce == null)
{
    $controller = "stranky";
    $akce = "domu";
}

// osetreni pro neexistujici controller nebo akci
if(!array_key_exists($controller, $povolene_controllery_a_akce) ||
   !in_array($akce, $povolene_controllery_a_akce[$controller]))
{
    $controller = "stranky";
    $akce = "chyba";
}

spustit($controller, $akce);

function spustit($controller, $akce)
{
    // nacteni souboru s danym controllerem
    require_once "controllers/" . $controller . "_controller.php";

    // nacteni pripadneho modelu pro dany controller
    switch($controller)
    {
        case "stranky":
            $aktivni_controller = new Stranky();
            break;
        case "uzivatele":
            require_once "models/Uzivatel.php";
            $aktivni_controller = new Uzivatele();
            break;
        case "denicky":
            require_once "models/Denicek.php";
            $aktivni_controller = new Denicky();
            break;
    }

    // spusteni dane akce daneho controlleru
    $aktivni_controller->{$akce}();
}
