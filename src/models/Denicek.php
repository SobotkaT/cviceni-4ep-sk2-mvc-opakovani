<?php
class Denicek{

    static public function vytvorit_data_denicku($data, $jmeno){
        $spojeni = DB::pripojit()
        mysqli_query($spojeni, "INSERT INTO 4ep_sk2_mvc_denicky (dataDenicku, uzivatel) VALUES ('$this->$data', '$this->$jmeno')")
        return mysqli_affected_rows($spojeni) == 1;
    }

    static public function vybrat_data_denicku($jmeno){

        $denicek = mysqli_query($spojeni, "SELECT * FROM 4ep_sk2_mvc_denicky WHERE uzivatel = '$jmeno'");
        if(mysqli_num_rows($denicek) == 0)
            $denicek = "Chyba_denicek_neexistuje";
        return $denicek;
    }
}


?>