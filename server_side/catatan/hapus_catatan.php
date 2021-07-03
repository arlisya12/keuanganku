<?php 
require_once '../../koneksi/conn.php';
$id_catatan = $conn->real_escape_string($_GET['id_catatan']);

$sql=$conn->query("DELETE FROM catatan WHERE id_catatan='$id_catatan' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>