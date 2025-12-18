<?php
$db = new Database();

if ($_POST) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $db->query("INSERT INTO artikel (judul, isi) VALUES ('$judul','$isi')");
    header("Location: ../artikel/index");
}
?>

<h3>Tambah Artikel</h3>

<form method="post">
<label>Judul</label><br>
<input type="text" name="judul" required><br><br>

<label>Isi</label><br>
<textarea name="isi" required></textarea><br><br>

<button>Simpan</button>
</form>
