<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';
hapus_kategori();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Daftar Kategori</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center py-3">
              <h3 class="card-title">Daftar Kategori Inventaris</h3>
              <a href="kategori_tambah.php" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Kategori</span>
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
              <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $tampil_kategori = tampil_kategori();
                        foreach ($tampil_kategori as $kategori): ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $kategori['nama_kategori']; ?></td>
                                <td><?php echo $kategori['deskripsi']; ?></td>
                                <td class="text-center">
                                    <a href="kategori_edit.php?id=<?php echo $kategori['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px"><i class="fa fa-edit btn-dark"></i></a>
                                    <a href="kategori.php?id=<?php echo $kategori['id']; ?>" class="btn-dark mr-2" style="padding:5px 7px" onclick="return confirm('Apakah Anda yakin akan menghapus data ini ?');"><i class="fa fa-trash-alt btn-dark"></i> </i></a>
                                </td>
                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include __DIR__ . '/../../inc/footer.php';
?>