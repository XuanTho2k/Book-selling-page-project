
<div class="bg-light rounded h-100 p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Authors Table</h6>
                        <a href="addAuthor" class="btn btn-outline-primary">Add New Author</a>
                    </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data['author_all'] as $row): ?>
                                    <tr>
                                        <th scope="row"><?php echo $row->getId() ?></th>
                                        <td><?php echo $row->getName() ?></td>

                                        <td>
                                        <a href="updateAuthor?author_id=<?php echo $row->getId() ?>" class="btn btn-primary">Update</a>
                                        <a href="deleteAuthor?author_id=<?php echo $row->getId() ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?> 
                                </tbody>
                            </table>
                        </div>