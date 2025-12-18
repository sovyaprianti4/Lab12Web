<?php
$db = new Database();
$id = $_GET['id'];

$data = $db->query("SELECT * FROM artikel WHERE id='$id'")->fetch_assoc();

if ($_POST) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $db->query("UPDATE artikel SET judul='$judul', isi='$isi' WHERE id='$id'");
    header("Location: ../artikel/index");
}
?>

<h3>Edit Artikel</h3>

<form method="post">
<label>Judul</label><br>
<input type="text" name="judul" value="<?= $data['judul'] ?>"><br><br>

<label>Isi</label><br>
<textarea name="isi"><?= $data['isi'] ?></textarea><br><br>

<button>Update</button>
</form>
