<?php
function arkademy($n)
{
    if(preg_match('/^[0-9]/',$n)){
        for ($i=1; $i <= $n ; $i++) { 
            if ($i%3 == 0 && $i%7 == 0) {
                echo "<b>Arkademy</b>,";
            }else if ($i%3 == 0) {
                echo "Arka,";
            }else if ($i%7 == 0) {
                echo "Demy,";
            }else{
                echo $i.',';
            }
        }
    }
    else{
        echo "Input Harus Angka ";
    }
}
$n = 50; //ganti $n dengan angka untuk melalukan uji coba
arkademy($n);
?>