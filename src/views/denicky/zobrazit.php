<?php
    global $zakladni_url;
?>

<h2>Deníček</h2>
<hr>
<a href="<?php echo $zakladni_url; ?>index.php/denicky/vytvorit/">Vytvořit poznámku</a>
<hr>

<?php
    if(isset($_SESSION["denicek"])){
        if(is_array($_SESSION["denicek"])){
            foreach($_SESSION["denicek"] as $poznamka){
                echo $poznamka;
?>
            <br>
<?php
            }
        }
        else{
            echo $_SESSION["denicek"];
        }
    }
    unset($_SESSION["denicek"]);
?>