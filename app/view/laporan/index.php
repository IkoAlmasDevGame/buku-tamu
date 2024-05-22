<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            require_once("../ui/header.php");
        ?>
        <title>Data Master Laporan</title>
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

    <body>
        <?php 
            require_once("../ui/sidebar.php");
        ?>
        <div class="p-auto m-5">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4 class="panel-heading display-4 fs-4 fst-normal fw-normal">Data Laporan</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title display-4 fs-4">Data Laporan</h4>
                            <form action="?page=laporan" method="post">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="date" name="tanggal" id="tanggal_kunjungan"
                                                class="form-control date-formate">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-default text-primary hover">Klick
                                                Here</button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Nama Tamu</th>
                                            <th>Kelas</th>
                                            <th>Email</th>
                                            <th>Kategori</th>
                                            <th>Jurusan</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        $tanggal = htmlspecialchars($_POST['tanggal']);
                                        $sql = "SELECT * FROM tb_tamu where tanggal_kunjungan = '$tanggal' order by id_tamu asc";
                                        $row = mysqli_query($configs,$sql);
                                        foreach ($row as $isi) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $isi["tanggal_kunjungan"] ?></td>
                                            <td><?php echo $isi["nama_tamu"] ?></td>
                                            <td><?php echo $isi["kelas"] ?></td>
                                            <td><?php echo $isi["email"] ?></td>
                                            <td><?php echo $isi["kategori"] ?></td>
                                            <td><?php echo $isi["jurusan"] ?></td>
                                            <td>
                                                <a href="?page=print&tanggal=<?=$isi['tanggal_kunjungan']?>"
                                                    role="button" aria-current="page" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            require_once("../ui/footer.php");
        ?>