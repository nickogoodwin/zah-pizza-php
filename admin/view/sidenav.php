<?php
global $employees;
?>

<nav id="sidenav" class="conatiner-fluid d-flex flex-column align-items-center justify-content-center align-items-sm-start shadow rounded gap-2 p-4">
        <h5>Filter</h5>        

        <form action="." method="post" class="p-1">
            <input type="hidden" name="action" value="filter_visits">
            
            <label for="employee-select" class="form-label">Select an Employee</label>
            <div class="d-flex flex-row gap-1">
                <select id="employee" name="employee" class="form-select">
                    <option value="all"><span class="text-primary">-View All Visits</span></option>
                    <option value="unassigned">-View All Unassigned Visits</option>
                    <?php foreach ($employees as $employee) { 
                        if ($employee['id']) {
                        ?>
                        <option value="<?php echo $employee['id'] ?>"><?php echo $employee['name'] ?> - <?php echo $employee['position'] ?></option>    
                        <?php } ?>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
            <div class="row">
                
            </div>
        </form>
</nav>
