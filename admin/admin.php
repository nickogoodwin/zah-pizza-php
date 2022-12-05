

<main class="container-fluid p-3 overflow-auto bg-light">
  <div class="row flex-column flex-nowrap h-100 w-100 justify-content-center align-items-center">
    <h3 class="text-center">Welcome to Zahdmin!</h3>
    <div class="d-flex flex-row gap-1 justify-content-center">
        <a href="visits" class="btn btn-primary">Visits</a>
        <a href="employees" class="btn btn-success">Employees</a>
    </div>
    <div class="my-4 d-flex flex-col gap-1 justify-content-center shadow p-4 w-50">
      <?php if (!$gamer) { ?>
        <form action="." method="post">
            <input type="hidden" name="action" value="game">

            <div>
              <label for="guess" class="form-label">Guess a number between 1 and 10</label>
              <input type="text" name="guess" id="guess" class="form-control">
              <input type="submit" value="Submit" class="btn btn-info my-1">
            </div>
        </form>
      <?php } else { ?>
        <span class="text-success"><?php echo $message ?></span>
      <?php } ?>
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
