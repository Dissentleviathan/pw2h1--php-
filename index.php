<?php
    // Ini adalah perintah untuk mencetak ke layar halaman.
    echo "Hello World!";

    /*
        o> Ini adalah deklarasi variabel dengan tipe data.
        o> Teks, bilangan bulet, bilangan desimal, boolean, dll.
        o> Nama variabel diawali dengan huruf atau garis bawah.
        o> Nama variabel hanya boleh ditulis dengan huruf atau garis bawah
            a-z, A-Z, 0-9, dan garis bawah (_)
        o> Nama variabel yang lebih dari satu kata dapat dipisahkan dengan garis bawah. Contoh : jenis_kelamin, gol_darah, ...
    */
    
    $nama = "M Agha Setya Pratama";
    $npm = "2125250072";
    $jk = "Laki-Laki";
    $umur = "21 Tahun";
    $berat = "70 Kg";
    $tinggi = "177 Cm";

    echo "<br/>";
    echo "Nama : ".$nama."<br/>";
    echo "NPM : $npm <br/>";
    echo "Jenis Kelamin : $jk <br/>";
    echo "Umur : $umur <br/>";
    echo "Berat : ".$berat."<br/>";
    echo "Tinggi : ".$tinggi."<br/>";

    $kode_prodi = substr($npm, 4, 2);
    $prodi = "";
    if ($kode_prodi == "25") {
        $prodi = "Informatika";
    } elseif ($kode_prodi == "24") {
        $prodi = "Sistem Informasi";
    } elseif ($kode_prodi == "27") {
        $prodi = "Teknik Elektro";
    } elseif ($kode_prodi == "20") {
        $prodi = "Manajemen";
    } elseif ($kode_prodi == "21") {
        $prodi = "Akutansi";
    }

    echo "Prodi : $prodi";
    

?>