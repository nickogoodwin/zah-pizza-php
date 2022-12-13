<?php
@session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container-fluid">
    <a href="<?php echo $app_path; ?>/admin" class="navbar-brand">
            <img
              src="<?php echo $app_path; ?>/public/img/pizza-logo.png"
              height="100"
              width="100"
              alt="Pizza Logo"
              class="d-inline-block align-text-center"
            />
            <h1 class="d-inline">Zahdmin</h1>
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse me-5" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <?php if (isset($_SESSION['is_admin'])) { ?>
        <a class="nav-link link-primary" href="<?php echo $app_path; ?>/admin">Dashboard</a>
        <a class="nav-link link-primary" href="<?php echo $app_path; ?>/admin/visits">Visits</a>
        <a class="nav-link link-primary" href="<?php echo $app_path; ?>/admin/employees">Employees</a>
        <a class="nav-link link-primary" href="<?php echo $app_path; ?>/admin/users">Users</a>
        <a class="nav-link link-primary" href="<?php echo $app_path; ?>/admin/index.php?action=logout"><i class="bi bi-door-open"></i>Logout</a>
        <?php }; ?>
        <a class="nav-link btn btn-warning text-danger fw-bold border border-danger border-2 rounded-pill ms-2" href="<?php echo $app_path; ?>/"><i class="bi bi-arrow-left"></i> Back To Zah Pizza</a>
      </div>
    </div>
  </div>
</nav>