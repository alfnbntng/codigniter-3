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
      .img-thumbnail {
        max-width: 100px; 
        max-height: 100px; 
      }
    </style>

    </style>
  </head>
  <body>
    <?php $this->load->view('sidebar');?>
        <!-- content -->
      <div class="container">
          <a href="<?php echo base_url('admin/tambah_siswa'); ?>" class="btn btn-outline-success mb-2">Tambah</a>
          <table class="table table-dark table-hover">
                <tr>
                    <td>No</td>
                    <td>Foto</td>
                    <td>Nama Siswa</td>
                    <td>NISN</td>
                    <td>Jenis Kelamin</td>
                    <td>Kelas</td>
                    <td>Aksi</td>
                </tr>
                <?php $no=0; foreach($siswa as $row): $no++ ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><img class="img-thumbnail" src="<?php echo base_url('images/siswa/' . $row->foto); ?>"></td>
                    <td><?php echo $row->nama_siswa ?></td>
                    <td><?php echo $row->nisn ?></td>
                    <td><?php echo $row->gender ?></td>
                    <td><?php echo tampil_full_kelas_byid($row->id_kelas)?></td>
                    <td>
                        <button onclick="hapus(<?php echo $row->id_siswa?>)" class="btn btn-danger">Hapus</button>
                        <a href="<?php echo base_url('admin/ubah_siswa/').$row->id_siswa ;?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    <!-- tag </div> di bawah ini untuk membuat tampilan sesuai dengan yang di maksud -->
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Dex?');
        if (yes == true) {
            window.location.href = "<?php echo base_url(
            'admin/hapus_siswa/'
        ); ?>" + id;
        }
    }
    </script>
  </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</html>
