<?php
include __DIR__ . '/../../inc/header.php';
include __DIR__ . '/../../inc/sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (update_user()) {
        echo "<script>
                alert('Berhasil edit user');
                window.location = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal edit user');
                window.location = 'user_edit.php';
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
                    <h1 class="m-0">Edit User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>view/user/user.php">User</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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
                            <h3 class="card-title">Edit User Inventaris</h3>
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
                                        <input type="text" class="form-control" id="inputFirstName3" name="first_name" value="<?php echo ambil_edit_user()['first_name']; ?>" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputLastName3" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputLastName3" name="last_name" value="<?php echo ambil_edit_user()['last_name']; ?>" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputUsername3" name="username" value="<?php echo ambil_edit_user()['username']; ?>" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone3" class="col-sm-2 col-form-label">No HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPhone3" name="phone" value="<?php echo ambil_edit_user()['phone']; ?>" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="email" value="<?php echo ambil_edit_user()['email']; ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputActive3" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="active">
                                            <option selected disabled>-- Pilih Status User --</option>
                                            <option value="1" <?php echo ambil_edit_user()['active'] == '1' ? 'selected' : '' ?>>Aktif</option>
                                            <option value="0" <?php echo ambil_edit_user()['active'] == '0' ? 'selected' : '' ?>>Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" value="Edit">
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