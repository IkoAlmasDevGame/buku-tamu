<?php 
require_once("../../database/koneksi.php");
session_start();
if(isset($_POST["submit"])){
    $user = htmlspecialchars($_POST["userEmail"]);
    $pass = htmlspecialchars($_POST["password"]);
    password_verify($pass, PASSWORD_DEFAULT);
                    
    if($user == "" || $pass == ""){
        echo "<script>document.location.href = 'index.php';</script>";
        die;
        exit;
    }
                    
    $table = "pengguna";
    $sql = "SELECT pengguna.*, tb_admin.email FROM $table inner join tb_admin on tb_admin.email = pengguna.email
     WHERE pengguna.email = '$user' and password = '$pass' || username = '$user' and password = '$pass'";
    $row = mysqli_query($configs, $sql);
    $cek = mysqli_num_rows($row);
                    
    if($cek > 0){
        $response = array($user,$pass);
        $respon[$table] = $response;
        if($db = $row->fetch_assoc()){
            $_SESSION['id_pengguna'] = $db['id'];
            $_SESSION['username'] = $db['username'];
            $_SESSION['email'] = $db['email'];
            $_SESSION['nama'] = $db['nama'];
            $_SESSION['role'] = 'admin';
            echo "<script>document.location.href = '../ui/header.php?page=beranda';</script>";
        }
        $_SESSION['status'] = true;
        array_push($respon[$table], $db);
        exit;
        return true;
    }
}else{
    $_SESSION['status'] = false;
    echo "<script>document.location.href = 'index.php';</script>";
    die;
    exit;
}
?>