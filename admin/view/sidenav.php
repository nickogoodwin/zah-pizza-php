<?php
global $employees;
global $visits;

?>

<nav id="sidenav" class="bg-white conatiner-fluid d-flex flex-column align-items-center justify-content-center align-items-sm-start shadow rounded gap-2 p-4">
        <h5>Filter</h5>        
<?php if ($visits) { ?>
    <div class="row">
        <form action="." method="post" class="p-1">
            <input type="hidden" name="action" value="filter_visits">
            
            <div class="d-flex flex-row gap-1">
                <select id="employee" name="employee" class="form-select">
                    <option value="all"><span class="text-primary">View All Visits</span></option>
                    <option value="unassigned">View All Unassigned Visits</option>
                    <option disabled>-Filter By Employee-</option>
                    <?php foreach ($employees as $employee) { 
                        if ($employee['id']) {
                        ?>
                        <option value="<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?> - <?php echo $employee['position'] ?></option>    
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
            Add New Visit
            </button>
            <!-- Modal -->
            <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="Modal-Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="AddModal-Label">Add New Visit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Add Form  -->
                <form action="." method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add_visit">
                        
                        <div class="mb-3">
                          <label class="form-label" for="name">Name</label>
                          <input class="form-control" type="text" name="name" id="name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="email">Email</label>
                          <input class="form-control" type="text" name="email" id="email">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="phone">Phone</label>
                          <input class="form-control" type="text" name="phone" id="phone">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="message">Message</label>
                          <input class="form-control" type="text" name="message" id="message">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="newsletter">Sign up for Newsletter?</label>
                          <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter">
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
<?php } else { ?>
    <div class="row">
    <form action="." method="post" class="p-1">
            <input type="hidden" name="action" value="filter">
            
            <div class="d-flex flex-row gap-1">
                <select id="employee" name="employee" class="form-select">
                    <option value="all"><span class="text-primary">View All Employees</span></option>
                    <option disabled>-Filter By Employee-</option>
                    <?php foreach ($employees as $employee) { 
                        if ($employee['id']) {
                        ?>
                        <option value="<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?> - <?php echo $employee['position'] ?></option>    
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
            Add New Employee
            </button>
            <!-- Modal -->
            <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="Modal-Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="AddModal-Label">Add New Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <!-- Add Form  -->
                <form action="." method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        
                        <div class="mb-3">
                          <label class="form-label" for="name">Name</label>
                          <input class="form-control" type="text" name="name" id="name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="position">Position</label>
                          <input class="form-control" type="text" name="position" id="position">
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
<?php } ?>
</nav>
