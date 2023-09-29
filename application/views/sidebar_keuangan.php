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
  @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
      body {
        font-family: "Poppins", sans-serif;
        background: #fafafa;
      }

      p {
        font-family: "Poppins", sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
      }

      a,
      a:hover,
      a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
      }

      .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
      }

      .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
      }

      .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
      }

      .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
      }

      #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #1f1f1f;
        color: #fff;
        transition: all 0.3s;
      }

      #sidebar.active {
        margin-left: -250px;
      }

      #sidebar .sidebar-header {
        padding: 20px;
        background: #3a3a3a;
      }

      #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #282828;
      }

      #sidebar ul p {
        color: #fff;
        padding: 10px;
      }

      #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
      }

      #sidebar ul li a:hover {
        color: #ffffff;
        background: #d1a802;
      }

      #sidebar ul li.active > a,
      a[aria-expanded="true"] {
        color: #fff;
        background: #d1a802;
      }

      a[data-toggle="collapse"] {
        position: relative;
      }

      .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
      }

      ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
      }

      ul.CTAs {
        padding: 20px;
        padding-top: 50px;
      }

      ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
      }

      a.article,
      a.article:hover {
        background: #fb0000 !important;
        color: #fff !important;
      }

      #content {
        background-color: #555555;
        color: white;
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
      }

      .card {
        margin-bottom: 20px;
        background-color: #1f1f1f;
      }

      .card-body {
        text-align: center;
      }

      @media (max-width: 768px) {
        #sidebar {
          margin-left: -250px;
        }
        #sidebar.active {
          margin-left: 0;
        }
        #sidebarCollapse span {
          display: none;
        }
      }
      

      
    </style>
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <h3>DashboardKu</h3>
        </div>

        <ul class="list-unstyled components">
          <div class="mx-1">
            <p class="btn-primary">Sistem Informasi Sekolah</p>
          </div>
          <li>
            <a href="<?php echo base_url('keuangan/index'); ?>"><i class="fa-solid fa-house mx-2"></i> Rumah</a>
          </li>
          <li>
            <a href="<?php echo base_url('keuangan/pembayaran'); ?>"><i class="fa-solid fa-credit-card mx-2"></i> Pembayaran</a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
          <li>
            <a
              href="<?php echo base_url('auth/logout' ); ?>"
              class="article"
              >Logout</a
            >
          </li>
        </ul>
      </nav>

    <!-- Page Content  -->
    <div id="content" class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
          <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item active">
                    <button type="button" id="sidebarCollapse" class="btn btn-warning">
                      <i class="fa-solid fa-bars"></i>
                    </button>
                  </li>
              </ul>
            </div>
          </div>
        </nav>

        <!-- page content -->

  

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function () {
        $("#sidebarCollapse").on("click", function () {
          $("#sidebar").toggleClass("active");
        });
      });
    </script>
  </body>
</html>
