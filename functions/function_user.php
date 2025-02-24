<?php
function tampil_user()
{
    global $db;

    $query = "SELECT * FROM sinventaris_users";
    $tampil_kategori = $db->query($query);
    $result = array();
    while ($row = $tampil_kategori->fetch_assoc()) {
        $result[] = $row;
    }

    return $result;
}

function tambah_user()
{
    global $db;

    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $active = $_POST['active'];

    $query = "INSERT INTO sinventaris_users (ip_address, first_name, last_name, username, phone, email, password, active) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("sssssssi", $ip_address, $first_name, $last_name, $username, $phone, $email, $password, $active);
    
    return $stmt->execute();
}


function update_user()
{
    global $db;
    $get_id = $_GET['id'];
    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $active = $_POST['active'];


    $query = "UPDATE sinventaris_users SET ip_address = ?, first_name = ?, last_name = ?, username = ?, phone = ?, email = ?, password = ?, active = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("sssssssii", $ip_address, $first_name, $last_name, $username, $phone, $email, $password, $active, $get_id);
    return $stmt->execute();
}

function ambil_edit_user()
{
    global $db;
    $get_id = $_GET['id'];

    $query = "SELECT * FROM sinventaris_users WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $get_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    return $data;
}

function hapus_user()
{

    global $db;
    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];

        $query = "DELETE FROM sinventaris_users WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $get_id);
    
        if($stmt->execute()) {
            echo "<script>
            alert('User berhasil dihapus');
            window.location = 'user.php';
            </script>";
            exit();
        } else {
            echo "Error" . $db->error;
            exit;
        }
    }
}

function getTotaluser() {
    global $db;

    $query = "SELECT COUNT(*) AS total_users FROM sinventaris_users";
    $result = $db->query($query);

    return $result->fetch_assoc();
}