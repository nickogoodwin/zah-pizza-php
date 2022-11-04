<?php
include('../../view/header.php');
include('../../view/nav.php');
global $employees
?>

<main class="container-fluid p-3 overflow-scroll bg-light">
<div class="row flex-nowrap h-100">
        <div class="col-auto col-md-3 col-xl-3 p-1">
           <?php include('../../view/sidenav.php');?>
        </div>
        

        <div class="col table-responsive-lg h-100 p-1">
        <table class="bg-white table table-striped table-hover table-bordered shadow w-auto">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee) { ?>
                        <tr>
                            <td><?php echo $employee['id']; ?></td>
                            <td><?php echo $employee['name']; ?></td>
                            <td><?php echo $employee['position']; ?></td>
                            
                            <td>
                                <div class="d-flex flex-row gap-1">
                                  <!-- Reply -->
                                  <!-- Button trigger modal -->
                                  <button title="Reply" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ReplyModal-<?php echo $employee['id'] ; ?>">
                                  <i class="bi bi-envelope"></i>
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="ReplyModal-<?php echo $employee['id'] ; ?>" tabindex="-1" aria-labelledby="Modal-<?php echo $employee['id'] ; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="ReplyModal-<?php echo $employee['id'] ; ?>Label">Email <?php echo $employee['name']; ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!-- Email Form  -->
                                        <form action="." method="POST">
                                          <div class="modal-body">
                                              <div class="mb-4">
                                                <p><span class="fw-bold">ID: </span><?php echo $employee['id']; ?></p>
                                                <p><span class="fw-bold">Name: </span><?php echo $employee['name']; ?></p>
                                                <p><span class="fw-bold">Position: </span><?php echo $employee['position']; ?></p>
                                              </div>

                                              <hr>

                                              <h4>Message</h4>
                                              <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                              <input type="hidden" name="action" value="message" class="form-control" >

                                              <label class="form-label" for="name">Name</label>
                                              <input class="form-control" type="text" name="name" id="name" value="">

                                              <label for="Comment" class="form-label">Comment</label>
                                              <textarea name="comment" placeholder="Reply to the customer here..." class="form-control"></textarea>

                                          </div>
                                        </form>
                                        <p class="text-center text-secondary">*Email is not functional at the moment</p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" disabled>Send</button>
                                        </div>
                                        
                                      </div>   
                                    </div>
                                  </div>

                                  <!-- EDIT -->
                                  <!-- Button trigger modal -->
                                  <button title="Edit" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#UpdateModal-<?php echo $employee['id'] ; ?>">
                                  <i class="bi bi-pencil"></i>
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="UpdateModal-<?php echo $employee['id'] ; ?>" tabindex="-1" aria-labelledby="Modal-<?php echo $employee['id'] ; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="UpdateModal-<?php echo $employee['id'] ; ?>Label">Update Employee: <?php echo $employee['name']; ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!-- Update Form  -->
                                      <form action="." method="POST">
                                          <div class="modal-body">
                                              <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
                                              <input type="hidden" name="action" value="update">
                                              
                                              <div class="mb-3">
                                                <label class="form-label" for="name">Name</label>
                                                <input class="form-control" type="text" name="name" id="name" value="<?php echo $employee['name']; ?>">
                                              </div>

                                              <div class="mb-3">
                                                <label class="form-label" for="position">Position</label>
                                                <input class="form-control" type="text" name="position" id="position" value="<?php echo $employee['position']; ?>">
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

                                  <!-- DELETE -->
                                  <!-- Button trigger modal -->
                                  <button title="Delete" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal-<?php echo $employee['id'] ; ?>">
                                  <i class="bi bi-trash-fill"></i>
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="DeleteModal-<?php echo $employee['id'] ; ?>" tabindex="-1" aria-labelledby="Modal-<?php echo $employee['id'] ; ?>Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="DeleteModal-<?php echo $employee['id'] ; ?>Label">Delete Visit <?php echo $employee['id']; ?>?</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!-- Update Form  -->
                                      <form action="." method="post">
                                          <input type="hidden" name="action" value="delete">
                                          <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

                                          <div class="modal-body">
                                              <p>Are you sure you want to delete this Employee?</p>
                                          </div>

                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                          </div>
                                      </form>

                                      </div>   
                                    </div>
                                  </div>

                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <br />
       </div>
    </div>  
</main>

<?php
include('../../view/footer.php')
?>