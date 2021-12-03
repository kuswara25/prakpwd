<?php
$ host = "host lokal" ;
$ namapengguna = "akar" ;
$ sandi = "" ;
$ Databasename = "akedemik1" ;
$ con =@ mysqli_connect ( $ host , $ username , $ password , $ databasename );
jika (! $ kon )
{
    gema  "Kesalahan: " . mysqli_connect_error ();
    keluar ();
}
?>