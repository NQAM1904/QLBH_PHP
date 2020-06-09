<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url() ?>/upload/admin/logo-admin.png" rel="icon">
    <title>Quản Lý Hệ Thống</title>
    <link href="<?= base_url() ?>/assets/css/ruang-admin.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="<?= base_url() ?>/assets/js/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/assets/js/bootbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootbox.locales.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/notify.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/notify.js"></script>
</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <style>
        .card {
            margin-top: 190px !important;
        }

        .btn-link {
            text-decoration: none !important;
        }
    </style>

    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="login-form">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Hệ thống quản lý</h1>
                            </div>
                            <form id="Login" action="?controller=login&action=login" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="uid" placeholder="Tên đăng nhập" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="pwd" placeholder="Mật khẩu" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" onclick="Login()" class="btn btn-outline-primary btn-block">Đăng nhập</button>
                                </div>
                                <script type="text/javascript">
                                    var input = document.getElementById("password");
                                    input.addEventListener("keyup", function(event) {
                                        if (event.keyCode === 13) {
                                            event.preventDefault();
                                            Login();
                                        }
                                    });
                                    var input2 = document.getElementById("username");
                                    input2.addEventListener("keyup", function(event) {
                                        if (event.keyCode === 13) {
                                            if ($("#password").val().length < 1) {
                                                $("#password").focus();
                                                return;
                                            }
                                            event.preventDefault();
                                            Login();
                                        }
                                    });

                                    function Login() {
                                        if ($("#username").val().length < 1 || $("#password").val().length < 1) {
                                            bootbox.alert("Vui lòng nhập điền đủ thông tin bên trên");
                                            return;
                                        }
                                        var dialog = bootbox.dialog({
                                            centerVertical: true,
                                            message: '<p class="text-center mb-0"><i class="fas fa-circle-notch fa-spin"></i> Vui lòng đợi trong giây lát...</p>',
                                            closeButton: false,
                                        }).on('shown.bs.modal', function() {
                                            $("#Login").submit();

                                        });
                                    }
                                </script>
                            </form>
                            <a href="<?= base_url() ?>index.php?controller=website" class="btn btn-link"> Trở về trang người dùng <i class="fas fa-arrow-left"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>