<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body>
<body>
    <?php $this->load->view('sidebar_keuangan')?>
    <div class="d-flex align-items-center bg-dark"> 
        <div class="card w-75 m-auto p-3 bg-dark text-light">
            <h3 class="text-center p-3">Tambah Pembayaran</h3>
            <form method="post" action="<?php echo base_url('keuangan/aksi_tambah_pembayaran')?>" enctype="multipart/form-data" class="row">
                <div class="mb-3 col-12">
                    <label for="kelas" class="form-label">Siswa</label>
                    <select name="id_siswa" class="form-select">
                        <option selected>Pilih Siswa</option>
                        <?php foreach($siswa as $row): ?>
                        <option value="<?php echo $row->id_siswa?>">
                            <?php echo $row->nama_siswa?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                    <input type="text" class="form-control" id="jenis_pembayaran" name="jenis_pembayaran">
                </div>
                <div class="mb-3 col-12">
                    <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                    <input type="number" class="form-control" id="total_pembayaran" name="total_pembayaran">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body> 
</body>
</html>