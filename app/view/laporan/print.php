<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            require_once("../ui/header.php");
            require_once("../ui/footer.php");
        ?>
        <title>Print Document</title>
        <style type="text/css">
        * {
            font-size: 14px;
        }

        tr>th {
            font-family: 'Times New Roman';
            font-weight: normal;
        }

        td {
            font-family: 'Times New Roman';
            font-weight: normal;
        }
        </style>
    </head>

    <body onload="window.print()">
        <div class="container-fluid">
            <div class="col-md-6 col-lg-6">
                <h4 class="text-center fs-4 display-4">Buku Tamu</h4>
                <table class="table table-bordered">
                    <tbody>
                        <?php 
                        $tanggal = htmlspecialchars($_GET['tanggal']);
                        $sql = "SELECT * FROM tb_tamu where tanggal_kunjungan = '$tanggal' order by id_tamu asc";
                        $row = mysqli_query($configs,$sql);
                        foreach ($row as $isi) {
                        ?>
                        <tr>
                            <td>Tanggal Kunjungan</td>
                            <td><?php echo $isi['tanggal_kunjungan'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Tamu</td>
                            <td><?php echo $isi['nama_tamu'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td><?php echo $isi['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $isi['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><?php echo $isi['kategori'] ?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><?php echo $isi['jurusan'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>

</html>