<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            require_once("../ui/header.php");
        ?>
        <title>Data Master Pengunjung</title>
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
                        <h4 class="panel-heading display-4 fs-4 fst-normal fw-normal">Data Pengunjung</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title display-4 fs-4">Data Pengunjung</h4>
                        </div>
                        <div class="table-responsive">
                            <div class="card-body">
                                <table class="table table-striped" id="example1">
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
                                        $sql = "SELECT * FROM tb_tamu order by id_tamu asc";
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
                                                <a href="" role="button" data-bs-target="#edit<?=$isi["id_tamu"]?>"
                                                    data-bs-toggle="modal" aria-current="page"
                                                    class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="?aksi=hapus&id=<?=$isi['id_tamu']?>"
                                                    onclick="return confirm('Apakah data ini akan anda hapus ?')"
                                                    aria-current="page" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <div class="modal fade" id="edit<?=$isi["id_tamu"]?>" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title fs-4 display-4">Edit Pengunjung
                                                                </h4>
                                                                <button type='button' class='btn-close'
                                                                    data-bs-dismiss='modal'></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <form action="?aksi=edit" method="post">
                                                                        <input type="hidden" name="id"
                                                                            value="<?=$isi['id_tamu']?>">
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">Tanggal
                                                                                        Kunjungan</label>
                                                                                    <input type="date" name="kunjungan"
                                                                                        id="tanggal_kunjungan"
                                                                                        value="<?=$isi['tanggal_kunjungan']?>"
                                                                                        class="form-control date-formate"
                                                                                        required>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">Nama Tamu</label>
                                                                                    <input type="text" name="tamu"
                                                                                        id="nama_tamu"
                                                                                        value="<?=$isi['nama_tamu']?>"
                                                                                        class="form-control" required>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">kelas</label>
                                                                                    <input type="text" name="kelas"
                                                                                        value="<?=$isi['kelas']?>"
                                                                                        id="kelas" class="form-control"
                                                                                        required>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">email</label>
                                                                                    <input type="email" name="email"
                                                                                        value="<?=$isi['email']?>"
                                                                                        id="email" class="form-control"
                                                                                        required>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">kategori</label>
                                                                                    <input type="text" name="kategori"
                                                                                        id="kategori"
                                                                                        value="<?=$isi['kategori']?>"
                                                                                        class="form-control" required>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label for="">jurusan</label>
                                                                                    <input type="text" name="jurusan"
                                                                                        id="jurusan"
                                                                                        value="<?=$isi['jurusan']?>"
                                                                                        class="form-control" required>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                class="btn btn-primary hover">Update</button>
                                                                            <button type='button'
                                                                                class='btn btn-default'
                                                                                data-bs-dismiss='modal'>Batal</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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