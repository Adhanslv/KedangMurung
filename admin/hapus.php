<?php
include "..\koneksi.php";
	if (isset($_GET['id_news'])) {
		$hapus = "DELETE FROM news WHERE id_news='$_GET[id_news]'";
		$db->query($hapus);
	}
?>
<script>
	alert("Data Berhasil Di Hapus");
	location.href="index.php";
</script>