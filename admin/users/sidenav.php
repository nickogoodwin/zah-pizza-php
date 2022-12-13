<nav id="sidenav" class="bg-white conatiner-fluid d-flex flex-column align-items-center justify-content-center align-items-sm-start shadow rounded gap-2 p-4">
        <h5>Filter</h5>
        <div class="row">
    <form action="." method="post" class="p-1">
            <input type="hidden" name="action" value="filter">
            
            <div class="d-flex flex-row gap-1">
                <select id="user" name="user" class="form-select">
                    <option value="all"><span class="text-primary">View All Users</span></option>
                    <option disabled>-Filter By User-</option>
                    <?php foreach ($users as $user) { 
                        if ($user['id']) {
                        ?>
                        <option value="<?php echo $user['id']; ?>"><?php echo $user['firstName'].' '.$user['lastName']; ?></option>    
                        <?php } ?>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
        </form>
        </div>
        <div class="row">
            <!-- Add -->
            <!-- Button trigger modal -->
            <button title="Add" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddModal">
            <i class="bi bi-plus"></i>
            Add New User
            </button>
            <!-- Modal -->
            <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="Modal-Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="AddModal-Label">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Add Form  -->
                <form action="." method="POST">
                    <div class="modal-body">
                      <input type="hidden" name="action" value="add">
                        
                      <div class="mb-3">
                        <label class="form-label" for="firstName">First Name</label>
                        <input class="form-control" type="text" name="firstName">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input class="form-control" type="text" name="lastName">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="text" name="email" >
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>   
              </div>
            </div>
        </div>   
</nav>