<ul class="navbar-nav me-auto">
  <li class="nav-item">
    <a class="nav-link" href="../home/index">Home</a>
  </li>

  <?php if (isset($_SESSION['is_login'])): ?>
  <li class="nav-item">
    <a class="nav-link" href="../artikel/index">Artikel</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../user/profile">Profil</a>
  </li>
  <?php endif; ?>
</ul>

<ul class="navbar-nav ms-auto">
<?php if (isset($_SESSION['is_login'])): ?>
<li class="nav-item">
  <a class="nav-link" href="../user/logout">
    Logout (<?= $_SESSION['nama'] ?>)
  </a>
</li>
<?php else: ?>
<li class="nav-item">
  <a class="nav-link" href="../user/login">Login</a>
</li>
<?php endif; ?>
</ul>
