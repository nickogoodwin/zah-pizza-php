<main class="container-fluid p-3 d-flex justify-content-center align-items-center overflow-auto bg-light">
  <div id="form-container" class="p-4 d-flex flex-column w-25 bg-white shadow rounded">
    <h3 class="text-center">Login</h3>
    
    <form action="." method="post">
        <input type="hidden" name="action" value="login">

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
            

        <input type="submit" value="Login" class="my-2 btn btn-primary">
    </form>
    <span class="text-danger"><?php echo $message ?></span>
  </div>
  <!-- <div id="form-container" class="p-4 d-flex flex-column w-25 bg-white shadow rounded">
    <h3 class="text-center">Register</h3>
    
    <form action="." method="post">
        <input type="hidden" name="action" value="register">

        <div class="form-group">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" />
        </div>

        <div class="form-group">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" />
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
            

        <input type="submit" value="Register" class="my-2 btn btn-primary">
    </form>
  </div>        -->
</main>

<style>
    #form-container {
        min-width: 320px;
    }
</style>