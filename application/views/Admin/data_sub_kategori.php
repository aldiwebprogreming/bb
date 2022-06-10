

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Sub Kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="card">
        <div class="card-header ui-sortable-handle" style="cursor: move;">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Data Sub kategori
          </h3>

        </div><!-- /.card-header -->
        <div class="card-body">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambahProduk">
            Tambah Sub Kategori
          </button>

          <!-- Modal -->
          <div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Sub Kategori</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                 <form method="post" action="<?= base_url('admin/tambah_sub_kategori') ?>" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Sub kategori</label>
                    <input type="text" class="form-control" required="" name="nama_sub_kategori" placeholder="Masukan nama sub kategori produk">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <select class="form-control" name="kode_kategori">
                      <option>-- Pilih Kategori Produk --</option>
                      <?php foreach ($kategori as $data ) { ?>
                        <option><?= $data['name_kategori'] ?></option>
                      <?php } ?>

                    </select>
                  </div>

                  <div class="form-check">
                    <label for="exampleInputEmail1">Nama Merek</label><br>
                    <?php foreach($merek as $data ) { ?>
                      <input class="form-check-input" name="merek[]" type="checkbox" id="inlineCheckbox1" value="<?= $data['name_merek'] ?>">
                      <label class="form-check-label" for="inlineCheckbox1"><?= $data['name_merek'] ?></label><br>

                    <?php } ?>
                  </div>




                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" name="kirim" class="btn btn-primary" value="Simpan Sub Kategori">

                </form>
              </div>
            </div>
          </div>
        </div>
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Sub Kategori</th>
              <th>Nama Sub Kategori</th>
              <th>Kode Kategori</th>
              <th>Kode Merek</th>
              <th>Date</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach($sub_kategori as $data){ ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['kode_sub_kategori'] ?></td>
                <td><?= $data['name_sub_kategori'] ?></td>
                <td><?= $data['kode_kategori'] ?></td>
                <td><?= $data['kode_merek'] ?></td>
                <td><?= $data['date'] ?></td>
                <!-- Button trigger modal -->
                <td>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $data['id'] ?>">
                   Hapus
                 </button>

                 <!-- Modal -->
                 <div class="modal fade" id="hapus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h4>Apakah anda ingin menghapus data ini?</h4>
                        <form method="post" action="<?= base_url('admin/hapus_sub_kategori') ?>">
                          <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-primary" submit="Hapus">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="<?= base_url('admin/edit_sub_kategori') ?>/<?= $data['id'] ?>" class="btn btn-info btn-sm">Edit</button>
                </td>
              </tr>
            <?php } ?>

          </tfoot>
        </table>
      </div>
    </div><!-- /.card-body -->
  </div>

</div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
