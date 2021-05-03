<?php
    function menu($jenis, $jumlah){
        echo $jenis."<br>";
        for($i=1; $i<$jumlah+1; $i++){
            echo "&nbsp &nbsp".$i.". Menu Makanan ke".$i."<br>";
        }
    }
    menu("Makanan", 3);
    menu("Minuman", 3);
    menu("Parcel", 3);
?>