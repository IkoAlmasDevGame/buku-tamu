<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Buku Tamu</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="layout">
            <nav class="navbar navbar-expand-lg bg-body-secondary">
                <div class="container-fluid">
                    <a href="index.php" aria-current="page"
                        class="navbar-brand text-decoration-none display-4 hover">Buku Tamu</a>
                    <button type="button" class="navbar-toggler" aria-label="Navbar Toggole Supported"
                        data-bs-target="#navbarToggoleSupported" data-bs-toggle="collapse"
                        aria-controls="navbarToggoleSupported">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbarToggoleSupported">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="../index.php" aria-current="page"
                                    class="nav-link display-4 fst-normal fw-normal">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="daftar_tamu.php" aria-current="page"
                                    class="nav-link display-4 fst-normal fw-normal">Daftar Buku Tamu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid m-auto p-1">
                <div class="container-fluid bg-light">
                    <div class="d-flex justify-content-center align-items-center flex-wrap">
                        <div class="p-3 m-3">
                            <div style="width: 600px; max-width:720px;">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title display-4 fs-4 display-4 fst-normal fw-normal">
                                            <i class="fa fa-book"></i>
                                            Daftar Buku Tamu
                                        </h4>
                                    </div>
                                    <div class="card-body" style="height: 560px; max-height: 640px;">
                                        <form action="daftar.php" method="post">
                                            <div class="form-group">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td>
                                                            <label for="">Tanggal Kunjungan</label>
                                                            <input type="date" name="kunjungan" id="tanggal_kunjungan"
                                                                class="form-control date-formate" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="">Nama Tamu</label>
                                                            <input type="text" name="tamu" id="nama_tamu"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="">kelas</label>
                                                            <input type="text" name="kelas" id="kelas"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="">email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="">kategori</label>
                                                            <input type="text" name="kategori" id="kategori"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label for="">jurusan</label>
                                                            <input type="text" name="jurusan" id="jurusan"
                                                                class="form-control" required>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="card-footer text-end">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary hover text-white shadow-sm">
                                                        Simpan
                                                    </button>
                                                    <button type="reset"
                                                        class="btn btn-warning hover text-dark shadow-sm">
                                                        Hapus semua
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container fixed-bottom">
                <footer class="footer">
                    <div class="border border-top mb-2"></div>
                    <p class="fst-normal fw-normal">&copy; Buku Tamu</p>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </body>

</html>