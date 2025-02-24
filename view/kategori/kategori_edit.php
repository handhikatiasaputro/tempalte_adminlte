<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (update_kategori()) {
        echo "<script>
                alert('Berhasil edit kategori');
                window.location = 'kategori.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal edit kategori');
                window.location = 'kategori_edit.php';
            </script>";
    }
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/kategori/kategori.php">Kategori</a></li>
                        <li class="breadcrumb-item active">Edit Kategori</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Kategori Inventaris</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputNamaKategori3" class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNamaKategori3" name="nama_kategori" placeholder="Masukkan Nama Kategori" value="<?php echo ambil_edit_kategori()['nama_kategori']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputDeskripsi3" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputDeskripsi3" name="deskripsi" placeholder="Masukkan Deskripsi Kategori"><?php echo ambil_edit_kategori()['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                                <a href="kategori.php" class="btn btn-default float-right">Cancel</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include __DIR__ . '/../../inc/footer.php';
?>