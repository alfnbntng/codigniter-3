<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Dashboard App</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      /* CSS Custom */
      body {
        font-family: "Lato", sans-serif;
        overflow-x: hidden;
      }

      #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #343a40;
        color: #fff;
        transition: all 0.3s;
        position: fixed;
        height: 100%;
        overflow-y: auto;
        z-index: 1;
      }

      #sidebar .sidebar-header {
        padding: 20px;
      }

      #sidebar ul.components {
        padding: 20px 0;
      }

      #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        text-decoration: none;
        color: #fff;
        display: block;
      }

      #sidebar ul li a:hover {
        color: #007bff;
        background: #fff;
      }

      #content {
        margin-left: 250px;
        padding: 15px;
        transition: all 0.3s;
      }

      /* Navbar di dalam konten */
      #content .navbar {
        background-color: #343a40;
        color: #fff;
        padding: 10px 15px;
        border-radius: 0;
      }

      #content .navbar a {
        color: #fff;
        text-decoration: none;
      }

      /* Cards */
      .card {
        margin-bottom: 20px;
      }

      .card-body {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <h3>EMYU MART</h3>
        </div>
        <ul class="list-unstyled components">
          <li>
            <a href="#"><i class="fas fa-home"></i> Home</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-chart-bar"></i> Dashboard</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-user"></i> Profile</a>
          </li>
          <!-- Tambahkan menu lainnya sesuai kebutuhan -->
        </ul>
      </nav>

      <!-- Konten Utama -->
      <div id="content">
        <!-- Navbar di dalam konten -->
        <nav class="navbar bg-transparent">
          <button type="button" id="sidebarCollapse" class="btn btn-dark">
            <i class="fas fa-bars"></i>
          </button>
        </nav>
        <!-- Isi konten utama aplikasi Anda akan ada di sini -->
        <div class="container">
          <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-header">Featured</div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-header">Featured</div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-header">Featured</div>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">
                    With supporting text below as a natural lead-in to
                    additional content.
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
          $("#content").toggleClass("active");
        });
      });
    </script>
  </body>
</html>
