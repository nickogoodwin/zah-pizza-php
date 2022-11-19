<nav class="navbar navbar-expand-md navbar-light text-white">
    <div class="container-fluid">
        <a href="<?php echo $app_path; ?>/" class="navbar-brand">
            <img
              src="<?php echo $app_path; ?>/public/img/pizza-logo.png"
              height="100"
              width="100"
              alt="Pizza Logo"
              class="d-inline-block align-text-center"
            />
            <h1 class="d-inline text-white">Zah</h1>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navigation"
          aria-controls="navigation"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse right justify-content-end me-5"
          id="navigation"
        >
          <div class="navbar-nav text-white">
            <a
              class="nav-link active text-white"
              aria-current="page"
              href="<?php echo $app_path; ?>"
              >Home</a
            >
            <a class="nav-link text-white" href="<?php echo $app_path; ?>/pages/menu">Menu</a>
            <a class="nav-link text-white" href="<?php echo $app_path; ?>/pages/faq">FAQ</a>
            <a  class="nav-link text-white" href="<?php echo $app_path; ?>/pages/about">About Us</a>
            <a class="nav-link text-white" href="<?php echo $app_path; ?>/pages/contact">Contact Us</a>
            <a class="nav-link text-white" href="<?php echo $app_path; ?>/admin">Admin</a>
            <a  id="build" class="nav-link" href="<?php echo $app_path; ?>/pages/zahbox"
              >Build Your Zah Box</a
            >
          </div>
      </div>
    </div>
</nav>
