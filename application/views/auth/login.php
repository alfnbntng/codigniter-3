<!-- application/views/login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <style>

        body {
            background-image: url('https://wallpaperaccess.com/full/1952510.jpg');
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
        }
        .card-title {
            color: #fff;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.3); 
            padding: 20px;
        }
        .logo {
            max-width: 200px;
            height: auto; 
            display: block; 
            margin: 0 auto 40px; 
        }

    </style>
</head>
<body>
    <div class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c4e7.png" alt="Logo" class="mb-4 logo">
                            <h2 class="card-title text-center">Login</h2>
                            <form method="post">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <div class="text-center">
                                    <a type="submit" class="btn btn-primary">kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan script untuk Bootstrap JS jika diperlukan -->
</body>
</html>
