<?php
    $pengeluaran_di_toko_1 = 10000;
    $pengeluaran_di_toko_68 = 30100;
    $pengeluaran_di_toko_81 = 0;
    echo "Diketahui : <br>
        Pengeluaran di Toko ke 1 : ".$pengeluaran_di_toko_1."<br>";
    echo "Pengeluaran di Toko ke 68 : ".$pengeluaran_di_toko_68."<br>";
    echo "Berapakah Pengeluaran di Toko 81 ? <br>";
    echo "Pertama, cari selisih pengeluaran di setiap toko <br>
    dengan (Pengeluaran di Toko ke 1 - Pengeluaran di Toko ke 68) / (68 - 1)<br>
    sehingga menjadi seperti berikut : <br>
    selisih pengeluaran di setiap toko = (".$pengeluaran_di_toko_68.") - (".$pengeluaran_di_toko_1.") / ( 68 - 1) <br>";
    $pengeluaran_di_tiap_toko = 10000;
    $selisih_pengeluaran_di_setiap_toko = ($pengeluaran_di_toko_68 - $pengeluaran_di_toko_1) / (68 - 1);
    echo "selisih pengeluaran di setiap toko = ".$selisih_pengeluaran_di_setiap_toko."<br>";
    echo "Toko ke- 1 : ".$pengeluaran_di_toko_1."<br>";
    for($i=2; $i<= 81; $i++){
        $pengeluaran_di_tiap_toko += $selisih_pengeluaran_di_setiap_toko;
        echo "Toko ke- ".$i." : ".$pengeluaran_di_tiap_toko."<br>";
    }
    $pengeluaran_di_toko_81 = $pengeluaran_di_tiap_toko;
    echo "<h2> Sehingga didapatkan pengeluaran di Toko ke-81 :".$pengeluaran_di_toko_81;
?>