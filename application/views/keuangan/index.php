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

    <body>
      <?php $this->load->view('sidebar_keuangan');?>
        <!-- content -->
        <div class="container">
          <div class="row">
               <!-- Card 1 -->
               <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pembayaran SPP</h5>
                  <p class="card-text">
                    Rp. 100.000.000
                  </p>
                  <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pembayaran Uang Gedung</h5>
                  <p class="card-text">
                    Rp. 100.000.000
                  </p>
                  <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Pembayaran Seragam</h5>
                  <p class="card-text">
                    Rp. 100.000.000
                  </p>
                  <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- tag </div> di bawah ini untuk membuat tampilan sesuai dengan yang di maksud -->
      </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</html>
