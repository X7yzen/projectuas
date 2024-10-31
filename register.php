<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiter Galeri Foto</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body class="bg-light">
<div class="container">
    <div class="row justify-content-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">アカウントを登録する</h5>
                    <?php
                    
                        if( isset($_POST['register'])) {
                            $name = $_POST['nama_lengkap'];
                            $email = $_POST['email'];
                            $alamat = $_POST['alamat'];
                            $username = $_POST['username'];
                            $password = md5($_POST['password']);

                            $insert = mysqli_query($koneksi, "INSERT INTO user (nama_lengkap,email,alamat,username,password,) VALUES('$name','$email','$alamat','$username','$password')"); 
                        
                            if($insert) {
                                echo '<script>alert("Pendaftaran Berhasil!"); location.href="login.php"</script>';   
                            }else{
                                echo '<script>alert("Pendaftaran Gagal!");</script>';   
                            }
                        }

                            
                    ?>
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">
                            フルネーム</label>
                            <input type="text" required class="form-control" name="nama_lengkap" placeholder="
フルネーム..." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                            電子メール</label>
                            <input type="email" required class="form-control" name="email" placeholder="
電子メール..." />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">住所</label>
                            <textarea name="alamat" required class="form-control" placeholder="住所..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ユーザー名</label>
                            <input type="username" required class="form-control" name="username" placeholder="ユーザー名..." />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">パスワード</label>
                            <input type="password" required class="form-control" id="password" name="password" placeholder="パスワード...">
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Daftar Sebagai</label>
                            <select class="form-select" aria-label="Default select example">
                                 <option value="admin">admin</option>
                            </select>
                        </div>
                        <button type="submit" name="register" value="register" class="btn btn-primary w-100">Daftar</button>
                    </form>
                    <div class="text-center mt-3">
                        <p>Sudah punya akun?<a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="aset/js/login.js"></script>
</body>
</html>
