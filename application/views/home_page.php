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
            background-image: url('https://wallpapercave.com/wp/wp12064884.jpg');
            background-size: cover; 
            background-repeat: no-repeat;
            background-attachment: fixed; 
        }
        .card-title {
            color: #fff;
        }
        .card {
            background-color: rgba(0, 0, 0, 0.2); 
            padding: 20px;
        }
        .logo {
            max-width: 200px;
            height: auto; 
            display: block; 
            margin: 0 auto 40px; 
        }
        .custom-button {
            font-size: 10px; 
            width: 150px
        }
        .footer {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
            color: #fff; 
        }

    </style>
</head>
<body>
    <div class="min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="container">
                            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c4e7.png" alt="Logo" class="mb-4 logo">
                            <h2 class="card-title text-center">Welcome King</h2>
                            <hr class="text-light">
                            <div class="d-flex justify-content-center">
                                <div class="text-center mx-1">
                                    <button type="submit" class="btn btn-secondary custom-button">perpustakaan</button>
                                </div>
                                <div class="text-center mx-1">
                                    <a href="./auth" type="submit" class="btn btn-warning custom-button">login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center mt-5">
    <p>&copy; <?php echo date('Y'); ?> Manchester United Football Club</p>
</footer>
</body>
</html>
