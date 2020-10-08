<?php
    global $zakladni_url;
    if(!isset($_SESSION["prihlaseny_uzivatel"]))
    {
        header("location:".$zakladni_url."index.php/stranky/chyba/");
        die();
    }
    $spojeni = DB::pripojit();
    $jmenoUzivatele = $_SESSION["prihlaseny_uzivatel"];
?>
<form action="?" method="post">
    <textarea name="denicek" id="denicek" cols="30" rows="2" placeholder="Zde zadej text..."></textarea><br />
    <button>Přidat poznámku</button>
</form>
<hr>
<h1>Deníček</h1><br />
<?php
?>
