<?php
    function genap_ganjil($num1, $num2){
        $ganjil = "Bilangan Ganjil";
        $genap = "Bilangan Genap";
        if ($num1 <= $num2){
            if ($num1 % 2 == 1){
                echo "".$num1.". ".$ganjil."<br>";
                genap_ganjil($num1 +1, $num2);
            }elseif ($num1 % 2 == 0){
                echo "".$num1.". ".$genap."<br>";
                genap_ganjil($num1 +1, $num2);
            }
        }
    }
    genap_ganjil(1, 10);
?>