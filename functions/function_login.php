<?php
function login()
{
    global $db;

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql_login = "SELECT * FROM sinventaris_users WHERE email = ? AND password = ? LIMIT 1";
    $stmt = $db->prepare($sql_login);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        $_SESSION['user'] = array(
            'id' => $user['id'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'username' => $user['username'],
            'phone' => $user['phone'],
            'phone' => $user['phone'],
            'email' => $user['email']
        );
        return true;
    } else {
        return false;
    }
}
