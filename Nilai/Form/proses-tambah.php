<?php
include '../-koneksi.php';
if (isset($_POST['simpan'])){
    $NIS = $_POST['NIS'];
    $nama = $_POST['nama'];
    $id_jurusan = "";
    if($_POST['id_jurusan'] == "REKAYASA PERANGKAT LUNAK"){
        $id_jurusan = 121;
    }else if($_POST['id_jurusan'] == "TEKNIK KOMPUTER JARINGAN"){
        $id_jurusan = 122;
    }else if($_POST['id_jurusan'] == "MULTIMEDIA"){
         $id_jurusan = 123;
    }
    
    $id_kelas = "";
    if($_POST['id_kelas'] == "X"){
        $id_kelas = 1;
    }else if($_POST['id_kelas'] == "XI"){
        $id_kelas = 2;
    }else if($_POST['id_kelas'] == "XII"){
        $id_kelas = 3;
    }
    $alamat = $_POST['alamat'];
    $nilai_Web = $_POST['nilai_Web'];
    $nilai_PBO = $_POST['nilai_PBO'];
    $nilai_Basdat = $_POST['nilai_Basdat'];
    $nilai_Desain = $_POST['nilai_Desain'];
    $nilai_Progdas = $_POST['nilai_Progdas'];
    $nilai_rata = ($nilai_Web + $nilai_PBO + $nilai_Basdat + $nilai_Desain + $nilai_Progdas)/5;
    $predikat = "";
    if($nilai_rata > 89 && $nilai_rata < 100){
        $predikat = "A";
    }else if($nilai_rata > 79 && $nilai_rata < 90 ){
        $predikat = "B";
    }else if($nilai_rata > 69 && $nilai_rata < 80){
        $predikat = "C";
    }else if($nilai_rata > 59 && $nilai_rata <70){
        $predikat = "D";
    }else if($nilai_rata <= 51){
        $predikat = "E";
    }
    $keterangan = "";
    if($nilai_rata > 89 && $nilai_rata < 100){
        $keterangan = "Excellent";
    }else if($nilai_rata > 79 && $nilai_rata < 90){
        $keterangan = "Baik";
    }else if($nilai_rata > 69 && $nilai_rata < 80){
        $keterangan = "Cukup";
    }else if($nilai_rata > 59 && $nilai_rata <70){
        $keterangan = "Kurang";
    }else if($nilai_rata <= 51){
        $keterangan = "Rendah";
    }
    $sql = "INSERT INTO siswa (NIS, nama, id_jurusan, id_kelas, alamat, nilai_Web, nilai_PBO, nilai_Basdat, nilai_Desain, nilai_Progdas, nilai_rata, predikat, keterangan)
    VALUES ('$NIS', '$nama', '$id_jurusan', '$id_kelas', '$alamat', '$nilai_Web', '$nilai_PBO', '$nilai_Basdat', '$nilai_Desain', '$nilai_Progdas', '$nilai_rata', '$predikat', '$keterangan')";
    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);

    if ($count == 1) {
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }

}
?>