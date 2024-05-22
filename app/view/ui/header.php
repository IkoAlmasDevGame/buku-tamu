<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            session_start();
            require_once("../../database/koneksi.php");
            require_once("../../config/configs.php");
            require_once("../../config/auth.php");

            if(!isset($_GET["page"])){
                require_once("../dashboard/index.php");
            }else{
                switch ($_GET["page"]) {
                    case 'beranda':
                        require_once("../dashboard/index.php");
                        break;
                    
                    case 'pengunjung':
                        require_once("../pengunjung/index.php");
                        break;
                        
                    case 'laporan':
                        require_once("../laporan/index.php");
                        break;

                    case 'print':
                        require_once("../laporan/print.php");
                        break;
                        
                    case 'pengguna':
                        require_once("../pengguna/index.php");
                        break;
                        
                    case 'keluar':
                        if(isset($_SESSION['status'])){
                            unset($_SESSION['status']);
                            session_unset();
                            session_destroy();
                            $_SESSION = array();
                        }
                        header("location:../auth/index.php");
                        exit(0);
                        break;
                    
                    default:
                        require_once("../dashboard/index.php");
                        break;
                }
            }

            if($_GET["aksi"]){
                if($_GET["aksi"] == "edit"){
                    $id = htmlspecialchars($_POST['id']);
                    $kunjungan = htmlspecialchars($_POST['kunjungan']);
                    $tamu = htmlspecialchars($_POST['tamu']);
                    $kelas = htmlspecialchars($_POST['kelas']);
                    $email = htmlspecialchars($_POST['email']);
                    $kategori = htmlspecialchars($_POST['kategori']);
                    $jurusan = htmlspecialchars($_POST['jurusan']);

                    $table = "tb_tamu";
                    $sql = "UPDATE $table SET tanggal_kunjungan = '$kunjungan', nama_tamu = '$tamu', kelas = '$kelas',
                     email = '$email', kategori = '$kategori', jurusan = '$jurusan' WHERE id_tamu = '$id'";
                    $row = mysqli_query($configs, $sql);
                    if($row === true){
                        echo "<script>alert('berhasil diubah'); document.location.href = '../ui/header.php?page=pengunjung'</script>";
                        die;
                        exit;
                    }else{
                        echo "<script>alert('gagal diubah'); document.location.href = '../ui/header.php?page=pengunjung'</script>";
                        die;
                        exit;                        
                    }
                }else if($_GET["aksi"] == "hapus"){
                    $id = htmlspecialchars($_GET['id']);
                    $table = "tb_tamu";
                    $sql = "DELETE FROM $table WHERE id_tamu = '$id'";
                    $row = mysqli_query($configs, $sql);
                    if($row === true){
                        echo "<script>alert('berhasil hapus'); document.location.href = '../ui/header.php?page=pengunjung'</script>";
                        die;
                        exit;
                    }else{
                        echo "<script>alert('gagal hapus'); document.location.href = '../ui/header.php?page=pengunjung'</script>";
                        die;
                        exit;                        
                    }
                }
            }
        ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <!--  -->
        <link href="../../../dist/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../../dist/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="../../../dist/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="../../../dist/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="../../../dist/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="../../../dist/vendor/simple-datatables/style.css" rel="stylesheet">
        <link href="../../../dist/css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
        <style type="text/css">
        .card-width {
            width: 360px;
        }

        .card-height {
            height: 220px;
        }

        @media (max-height: 500px) {
            .card-height {
                max-height: 500px;
            }
        }

        @media (max-width: 720px) {
            .card-width {
                max-width: 720px;
            }
        }

        .fa-refresh {
            animation: rotating 2s linear infinite;
        }

        @keyframes rotating {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
        </style>
        <title>Dashboard Admin Buku Tamu</title>
    </head>

    <body>