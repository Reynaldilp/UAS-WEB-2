<?php

include_once "../includes/DbOperation1.php";

$db = new DbOperation1();

if (isset($_GET['kode'])) {
	$pesan = $_GET['kode'];
	if ($pesan == "insert") {
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$tmpt_lahir = $_POST['tmpt_lahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$asal_sklh = $_POST['asal_sklh'];
		$nilai_akhir = $_POST['nilai_akhir'];
		$jurusan = $_POST['jurusan'];
		$add = $db->insert_siswa($nis, $nama, $tmpt_lahir, $tgl_lahir, $asal_sklh, $nilai_akhir, $jurusan);
		if ($add) {
			header("location:../frontend2.php");
		}
	} else if ($pesan == "update") {
		$id = $_SESSION['id'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$tmpt_lahir = $_POST['tmpt_lahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$asal_sklh = $_POST['asal_sklh'];
		$nilai_akhir = $_POST['nilai_akhir'];
		$jurusan = $_POST['jurusan'];
		$add = $db->update_siswa($nis, $nama, $tmpt_lahir, $tgl_lahir, $asal_sklh, $nilai_akhir, $jurusan, $id);
		if ($add) {
			header("location:../index.php");
		}
	}
	# code...

	else if ($pesan == "delete") {
		$id = $_GET['id'];
		$delete = $db->delete_siswa($id);
		if ($delete) {
			header("location:../index.php");
		}
	}
} else {
	header("location:" . $db->base_url());
}
