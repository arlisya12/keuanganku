<?php 
require_once '../../koneksi/conn.php';
$id_catatan = $conn->real_escape_string($_POST['id_catatan']);
$nama_catatan = $conn->real_escape_string($_POST['nama_catatan']);

$data = array();
$data['error_string'] = array();
$data['inputerror'] = array();
$data['status'] = TRUE;

if($nama_catatan == ''){
	$data['inputerror'][] = 'nama_catatan';
	$data['error_string'][] = 'Isi catatan wajib di isi';
	$data['status'] = FALSE;
}


if($data['status'] === FALSE){
	echo json_encode($data);
	exit();
}

$sql=$conn->query("UPDATE catatan SET nama_catatan='$nama_catatan' WHERE id_catatan='$id_catatan' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>