<?php

require_once 'conn.php';
$search = $_GET['login'];
$query = $conn->query("SELECT id, login from user WHERE `login` LIKE '%$search%'") or die(mysqli_connect_errno());

$list = array();
$rows = $query->num_rows;

if ($rows > 0) {
    while ($fetch = $query->fetch_assoc()) {
        $data['id'] = $fetch['login'];

        array_push($list, $data);
    }
}

echo json_encode($list);
?>