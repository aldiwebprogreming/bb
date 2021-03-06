

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Produk</h1>
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
            Data produk
          </h3>

        </div><!-- /.card-header -->
        <div class="card-body">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambahProduk">
            Tambah Produk
          </button>

          <!-- Modal -->
          <div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                 <form method="post" action="<?= base_url('admin/tambah_produk') ?>" enctype="multipart/form-data">
                 <!--  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Produk</label>
                    <input type="text" class="form-control" required="" name="kode_produk">
                  </div>
                -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" class="form-control" required="" name="nama_produk" placeholder="Masukan nama produk">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan Produk</label>
                  <textarea class="form-control" name="ket_produk" placeholder="Masukan keterangan produk"></textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Produk</label>
                  <select class="form-control" name="kategori">
                    <option>-- Pilih Kategori Produk --</option>
                    <?php foreach ($kategori_produk as $data) {  ?>
                      <option><?= $data['name_kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Sub Kategori Produk</label>
                  <select class="form-control" name="sub_kategori">
                    <option>-- Pilih Sub Kategori Produk --</option>
                    <?php foreach ($sub_kategori as $data) {  ?>
                      <option><?= $data['name_sub_kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Sub Kategori Produk</label>
                  <select class="form-control" name="jenis_sub_kategori">
                    <option>-- Pilih  Jenis Sub Kategori Produk --</option>
                    <?php foreach ($jenis_sub_kategori as $data) {  ?>
                      <option><?= $data['name_jenis_sub_kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Gambar Produk</label>
                  <input type="file" class="form-control" required="" name="img">
                </div>



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="kirim" class="btn btn-primary" value="Simpan Produk">

              </form>
            </div>
          </div>
        </div>
      </div>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <!-- <th>Merek</th> -->
            <th>Kategori</th>
            <th>Img</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($produk as $data){ ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['kode_produk'] ?></td>
              <td><?= $data['name_produk'] ?></td>
              <!--  <td><?= $data['kode_merk'] ?></td> -->
              <td><?= $data['name_kategori'] ?></td>
              <td><img src="<?= base_url('berkas/') ?><?= $data['image'] ?>" style="height: 100px;"></td>
              <td>
               <!-- Button trigger modal -->
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
                      <h4>Apakah anda ingi menghapus data ini?</h4>
                      <form method="post" action="<?= base_url('admin/hapus_produk') ?>">
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
              <a href="<?= base_url('admin/edit-produk/') ?><?= $data['id'] ?>" class="btn btn-info btn-sm">Edit</button>
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
