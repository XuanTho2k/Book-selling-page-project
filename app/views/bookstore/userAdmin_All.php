<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="addUser">Add New User</a>
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col">Avatar</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Tel</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['user_all'] as $user): ?>
                                        <tr>
                                            <th scope="row"><?php echo $user->getId() ?></th>
                                            <td><?php echo $user->getName() ?></td>
                                            <td><img alt="Avatar here" src="<?php echo ASSETS ?>bookstore/img/<?php echo $user->getImg() ?>" alt=""></td>
                                            <td><?php echo $user->getEmail() ?></td>
                                            <td><?php echo $user->getPw() ?></td>
                                            <td><?php echo $data['user_m']->getRoleNameById($user->getRole()) ?></td>
                                            <td><?php echo $user->getTel() ?></td>
                                            <td><a href="updateUser?user_id=<?php echo $user->getId() ?>" class="btn btn-primary">Update</a>
                                            <a href="deleteUser?user_id=<?php echo $user->getId() ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>