<?php
class Denicek{

    private $data;

    public static function vytvorit_data_denicku($data, $jmeno){
        $spojeni = DB::pripojit();
        mysqli_query($spojeni, "INSERT INTO 4ep_sk2_mvc_denicky (dataDenicku, uzivatel) VALUES ('$data', '$jmeno')");
        return mysqli_affected_rows($spojeni) == 1;
    }

    public static function vybrat_data_denicku($jmeno){
        $spojeni = DB::pripojit();
        $denicek = mysqli_query($spojeni, "SELECT * FROM 4ep_sk2_mvc_denicky WHERE uzivatel = '$jmeno'");
        if(mysqli_num_rows($denicek) == 0)
            $denicek = "V databázi není žádný deník";
        else{
            $i = 0;
            while ($radek = mysqli_fetch_assoc($denicek)) {
                $poleDenicku[$i] = $radek["dataDenicku"];
                $i++;
            }
            return $poleDenicku;
        }
        return $denicek;
    }
}

?>