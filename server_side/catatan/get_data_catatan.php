<?php 
require_once '../../koneksi/conn.php';
$id_catatan=$_GET['id_catatan'];
$query = $conn->query("SELECT * FROM catatan WHERE id_catatan = '$id_catatan'");
$result = array();
$fetchData = $query->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
?>