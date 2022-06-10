

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Jenis Sub Kategori</h1>
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
            Edit Jenis Sub Kategori
          </h3>

        </div><!-- /.card-header -->
        <div class="card-body">
          <!-- Button trigger modal -->

          <div class="row">
            <div class="col-sm-6">
              <form method="post" action="<?= base_url('admin/act_edit_jenis_sub_kategori') ?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $jenis_subkategori['id'] ?>">

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jenis Sub Kategori</label>
                  <input type="text" name="nama_jenis_sub_kategori" class="form-control" value="<?= $jenis_subkategori['name_jenis_sub_kategori'] ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Sub Kategori</label>
                  <select class="form-control" name="kode_sub_kategori">
                    <option style="font-weight: bold;"><?= $jenis_subkategori['kode_sub_kategori'] ?></option>
                    <?php foreach($sub as $data) {?>
                      <option><?= $data['name_sub_kategori'] ?></option>
                    <?php } ?>
                  </select>
                </div>


                <input type="submit" name="edit" class="btn btn-primary mt-3" value="Edit Jenis Sub Kategori">

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
