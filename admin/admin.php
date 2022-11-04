<?php
include('view/header.php');
include('view/nav.php');
?>

<main class="container-fluid p-3 overflow-auto bg-light">
  <div class="row flex-column flex-nowrap h-100 w-100 justify-content-center align-items-center">
    <h3 class="text-center">Welcome to Zahdmin!</h3>
    <div class="d-flex flex-row gap-1 justify-content-center">
        <a href="pages/visits" class="btn btn-primary">Visits</a>
        <a href="pages/employees" class="btn btn-success">Employees</a>
    </div>
  </div>      
</main>

<style>
  a.btn {
    transition: all 100ms ease-in-out;
  }

  a.btn:hover {
    transform: scale(.95);
  }
</style>

<?php
include('view/footer.php')
?>