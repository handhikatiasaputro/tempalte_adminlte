<?php

function get_ip_address() {
    $get_ip_address = $_SERVER['REMOTE_ADDR'];

    if($get_ip_address == '::1') {
        $set_ip_address = '127.0.0.1';
    } else {
        $set_ip_address = $get_ip_address;
    }
    
    return $set_ip_address;
}

function register()
{
    global $db;

    // Mengambil input dengan filter sanitasi dasar
    $ip_address = get_ip_address();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Cek apakah email sudah terdaftar menggunakan prepared statements
    $sql_check = "SELECT * FROM sinventaris_users WHERE email = ?";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Jika email sudah ada
        return "Email sudah terdaftar";
    } else {
        // Jika email belum terdaftar, masukkan data ke tabel users
        $sql_register = "INSERT INTO users (ip_address, first_name, last_name, username, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_register = $db->prepare($sql_register);
        $stmt_register->bind_param("sssssss", $ip_address, $first_name, $last_name, $username, $phone, $email, $password);
        
        if ($stmt_register->execute()) {
            return "Registrasi berhasil";
        } else {
            return "Registrasi gagal";
        }
    }
}
