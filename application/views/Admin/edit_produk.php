

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Data Produk</h1>
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

          <div class="row">
            <div class="col-sm-6">
              <form method="post" action="<?= base_url('admin/act_edit_produk') ?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $produk['id'] ?>">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk</label>
                  <input type="text" name="nama_produk" class="form-control" value="<?= $produk['name_produk'] ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan Produk</label>
                  <textarea class="form-control" name="ket_produk"><?= $produk['ket_produk'] ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Produk</label>
                  <select class="form-control" name="kategori_produk">
                    <option><?= $produk['kode_kategori'] ?></option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Merek Produk</label>
                  <select class="form-control" name="merek_produk">
                    <option><?= $produk['kode_merk'] ?></option>
                  </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <input type="file" class="form-control" name="img">
                  <img src="<?= base_url('berkas') ?>/<?= $produk['image'] ?>" alt="img" class="img-thumbnail mt-2" style="height: 200px; width: 200px;">
                </div>

                <input type="submit" name="edit" class="btn btn-primary" value="Edit produk">

              </form>
            </div>
          </div>

        </div>
      </div><!-- /.card-body -->
    </div>

  </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
