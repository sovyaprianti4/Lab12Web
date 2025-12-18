<?php
$db = new Database();
$message = "";

if ($_POST) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $id = $_SESSION['id'];
    $db->query("UPDATE users SET password='$password' WHERE id='$id'");
    $message = "Password berhasil diubah";
}
?>

<h3>Profil User</h3>

<p>Nama : <b><?= $_SESSION['nama'] ?></b></p>
<p>Username : <b><?= $_SESSION['username'] ?></b></p>

<?php if ($message): ?>
<div class="alert alert-success"><?= $message ?></div>
<?php endif; ?>

<form method="post" style="max-width:400px">
<label>Password Baru</label>
<input type="password" name="password" class="form-control mb-2" required>
<button class="btn btn-warning">Ubah Password</button>
</form>
