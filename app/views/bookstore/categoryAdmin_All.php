<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="addCategory">Add New Category</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th> 
                                    <th scope="col">Description</th> 
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['cate_all'] as $row): ?>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?php echo $row->getId() ?></td>
                                    <td><?php echo $row->getName() ?></td>
                                    <td><img class="img-fluid w-50"  src="<?php echo ASSETS ?>bookstore/img/<?php echo $row->getImg() ?>" alt=""></td>
                                    <td><?php echo $row->getDes() ?></td>
                                    <td><a class="btn btn-sm btn-primary" href="updateCate?cate_id=<?php echo $row->getId() ?>">Update</a>
                                    <a class="btn btn-sm btn-danger"  href="deleteCate?cate_id=<?php echo $row->getId() ?>">Delete</a>
                                </td>
                                </tr>
                                <?php endforeach; ?>
                               <!--
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->