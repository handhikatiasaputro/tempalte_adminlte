<?php
function tampil_kategori()
{
    global $db;

    $tampil_kategori_masjid = "SELECT * FROM sinventaris_kategori";
    $tampil_kategori = $db->query($tampil_kategori_masjid);
    $result = array();
    while ($row = $tampil_kategori->fetch_assoc()) {
        $result[] = $row;
    }

    return $result;
}

function tambah_kategori()
{
    global $db;

    $nama = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];
    $query = "INSERT INTO sinventaris_kategori (nama_kategori, deskripsi) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ss", $nama, $deskripsi);
    
    return $stmt->execute();;
}


function update_kategori()
{
    global $db;
    $get_id = $_GET['id'];
    $nama_kategori = $_POST['nama_kategori'];
    $deskripsi = $_POST['deskripsi'];


    $query = "UPDATE sinventaris_kategori SET nama_kategori = ?, deskripsi = ? WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssi", $nama_kategori, $deskripsi, $get_id);
    return $stmt->execute();
}

function ambil_edit_kategori()
{
    global $db;
    $get_id = $_GET['id'];

    $query = "SELECT * FROM sinventaris_kategori WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $get_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    return $data;
}

function hapus_kategori()
{

    global $db;
    if(isset($_GET['id'])) {
        $get_id = $_GET['id'];

        $query = "DELETE FROM sinventaris_kategori WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $get_id);
    
        if($stmt->execute()) {
            echo "<script>
            alert('Kategori berhasil dihapus');
            window.location = 'kategori.php';
            </script>";
            exit();
        } else {
            echo "Error" . $db->error;
            exit;
        }
    }
}

function getTotalKategori() {
    global $db;

    $query = "SELECT COUNT(*) AS total_categories FROM sinventaris_kategori";
    $result = $db->query($query);

    return $result->fetch_assoc();
}