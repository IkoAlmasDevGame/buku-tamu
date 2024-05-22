<?php 
require_once("../../database/koneksi.php");
if(isset($_POST['submit'])){
    $kunjungan = htmlspecialchars($_POST['kunjungan']);
    $tamu = htmlspecialchars($_POST['tamu']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $email = htmlspecialchars($_POST['email']);
    $kategori = htmlspecialchars($_POST['kategori']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $table = "tb_tamu";
    $sql = "INSERT INTO $table (id_tamu,tanggal_kunjungan,nama_tamu,kelas,email,kategori,jurusan)
     VALUES ('','$kunjungan','$tamu','$kelas','$email','$kategori','$jurusan')";
    $row = mysqli_query($configs,$sql);
    $kTamu = array($kunjungan,$tamu,$kelas,$email,$kategori,$jurusan);
    $pTamu[$table] = $kTamu;
    array_push($pTamu[$table], $kTamu);

    if($row === true){
        echo "<script>
        alert('Daftar Tamu sudah ter isi');
        document.location.href = '../index.php';
        </script>";
        exit;
        die;
        return true;
    }else{
        echo "<script>
        document.location.href = 'daftar_tamu.php';
        </script>";
        exit;
        die;
        return false;
    }
}else{
    echo "<script>alert('Data harap diisi terlebih dahulu ...');</script>";
    exit;
    die;
    return false;
}
?>