<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (tambah_user()) {
        echo "<script>
                alert('Berhasil tambah user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal tambah user');
                window.location = 'user_tambah.php';
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
                    <h1 class="m-0">Tambah User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/user/user.php">User</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
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
                            <h3 class="card-title">Tambah User Inventaris</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="POST">
                            <input type="hidden" name="ip_address">
                            <input type="hidden" name="active" value="1"> 
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputFirstName3" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputFirstName3" name="first_name" placeholder="First Name" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputLastName3" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputLastName3" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputUsername3" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone3" class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPhone3" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Simpan">
                                <a href="user.php" class="btn btn-default float-right">Cancel</a>
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