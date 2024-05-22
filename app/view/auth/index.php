<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku Tamu Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style type="text/css">
        body {
            background-color: gray;
            background-blend-mode: darken;
        }

        .width-normal {
            width: 420px;
            max-width: 720px;
        }
        </style>
    </head>

    <body>
        <div class="container-fluid m-auto p-1">
            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center flex-wrap">
                    <div class="p-5 m-5">
                        <div class="width-normal">
                            <div class="card">
                                <div class="card-header bg-transparent border-0">
                                    <h4 class="card-title fs-5 display-4 fst-normal fw-normal">Login Admin</h4>
                                    <h4 class="text-end card-title fs-5 display-4 fst-normal fw-normal">- Buku Tamu -
                                    </h4>
                                </div>
                                <div class="border border-1 border-top"></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <form action="login.php" method="post">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td>
                                                        <label for="">username / email :</label>
                                                        <input type="text"
                                                            placeholder="masukkan username atau email anda ..."
                                                            name="userEmail" id="userEmail" class="form-control"
                                                            required>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="">password : </label>
                                                        <input type="password" placeholder="masukkan password anda ..."
                                                            name="password" id="password" class="form-control" required>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="card-footer text-center">
                                                <button name="submit" type="submit" class="btn btn-primary hover">
                                                    Login
                                                </button>
                                                <button type="reset" class="btn btn-danger hover">
                                                    Reset
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </body>

</html>