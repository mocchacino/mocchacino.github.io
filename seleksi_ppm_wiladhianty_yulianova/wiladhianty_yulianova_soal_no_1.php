<?php
    $bolpoin = 1750;
    print "Harga Bolpoin : ".$bolpoin."<br>";
    $pengeluaran = 12 * $bolpoin;
    print "Ryan membeli 12 bolpoin <br>";
    print "Sehingga 12 x harga Bolpoin <br>";
    print "12 * ".$bolpoin." = ".$pengeluaran."<br>";
    print "Ryan membayar dengan 5 lembar uang 5000 <br>";
    print "Sehingga total uang yang dibayarkan oleh Ryan adalah :<br>";
    $pembayaran = 5 * 5000;
    $kembalian = $pembayaran - $pengeluaran;
    print "5 * 5000 = ".$pembayaran."<br>";
    print "Ryan mendapatkan kembalian sejumlah : ".$pembayaran." - ".$pengeluaran."<br>";
    print "Sehingga uang Kembalian Ryan : ".$kembalian; 
?>