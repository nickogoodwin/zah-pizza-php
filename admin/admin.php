<?php
include('view/header.php');
include('view/nav.php');

global $visits;


?>
<main class="container-fluid p-3">



            <table class="table table-striped table-hover table-bordered shadow">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Newsletter?</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    <?php foreach ($visits as $visit) { ?>
                        <tr>
                            <td><?php echo $visit['id']; ?></td>
                            <td><?php echo $visit['name']; ?></td>
                            <td><?php echo $visit['email']; ?></td>
                            <td><?php echo $visit['phone']; ?></td>
                            <td><?php echo $visit['message']; ?></td>
                            <td><?php echo $visit['newsletter']; ?></td> 
                            <td><?php echo $visit['date']; ?></td> 
                            <td>
                                <form action="." method="post">
                                    <input type="hidden" name="action" value="delete_visit">
                                    <input type="hidden" name="id" value="<?php echo $visit['id']; ?>" >
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</button>
                                </form>
                            </td>
                            <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal-<?php echo $visit['id'] ; ?>">
                                <i class="bi bi-pencil"></i> Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="Modal-<?php echo $visit['id'] ; ?>" tabindex="-1" aria-labelledby="Modal-<?php echo $visit['id'] ; ?>Label" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="Modal-<?php echo $visit['id'] ; ?>Label">Update Visit <?php echo $visit['id']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <!-- Update Form  -->
                                    <form action="." method="POST">
                                        <input type="hidden" name="id" value="<?php echo $visit['id']; ?>">
                                        <div class="modal-body">
                                        <input class="form-control" type="hidden" name="action" value="update_visit">

                                        <label class="form-label" for="name">Name</label>
                                        <input class="form-control" type="text" name="name" id="name" value="<?php echo $visit['name']; ?>">

                                        <label class="form-label" for="email">Email</label>
                                        <input class="form-control" type="text" name="email" id="email" value="<?php echo $visit['email']; ?>">
                                        
                                        <label class="form-label" for="phone">Phone</label>
                                        <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $visit['phone']; ?>">

                                        <label class="form-label" for="message">Message</label>
                                        <input class="form-control" type="text" name="message" id="message" value="<?php echo $visit['message']; ?>">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>   
                                  </div>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
</main>

<?php
include('view/footer.php')
?>