<?php 
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

$configs = mysqli_connect("localhost", "root", "", "buku_tamu");

if(mysqli_error($configs) or mysqli_errno($configs)){
    die("Database Koneksi tidak tersambung ...");
    http_response_code(404);
}
?>