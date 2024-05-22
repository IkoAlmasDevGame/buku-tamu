<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku Tamu</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <body>
        <div class="layuot">
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
                                <a href="index.php" aria-current="page"
                                    class="nav-link display-4 fst-normal fw-normal">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" aria-current="page"
                                    class="nav-link display-4 fst-normal fw-normal">About Buku Tamu</a>
                            </li>
                            <li class="nav-item">
                                <a href="pengunjung/daftar_tamu.php" aria-current="page"
                                    class="nav-link display-4 fst-normal fw-normal">Daftar Buku Tamu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section id="about" class="min-vh-100 mt-5 pt-5">
                <div class="container-fluid p-5 m-auto bg-body-tertiarity">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 m-auto">
                            <div class="container-md container-lg py-1 bg-body-secondary">
                                <h4 class="text-start display-4 fs-4 text-center">Buku Pengunjung Tamu</h4>
                                <div class="border border-top mb-3"></div>
                                <div class="container-md container-lg">
                                    <p class="fw-normal fst-normal display-4 fs-5">
                                        Buku Tamu untuk Pengunjung ini untuk mahasiswa yang ingin mendaftarkan
                                        ketika ada kegiatan seperti seminar dan lain lain.
                                    </p>
                                    <div class="border border-bottom mb-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-4 m-auto">
                            <div class="container-md container-lg py-1 bg-body-secondary">
                                <h4 class="text-start display-4 fs-4 text-center">Buku Pengunjung Tamu 2</h4>
                                <div class="border border-top mb-3"></div>
                                <div class="container-md container-lg">
                                    <p class="fw-normal fst-normal display-4 fs-5">
                                        Buku tamu ini di isi untuk pengunjung lain juga jika ingin mendaftarkan atau
                                        menghadiri kegiatan yang di ingin, misalkan perlombaan, dan lain lain.
                                    </p>
                                    <div class="border border-bottom mb-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
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