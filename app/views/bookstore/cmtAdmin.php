<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Book</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Text</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($data['cmt_all'] as $cmt): ?>:
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cmt->getDate() ?></td>
                                    <?php $book = $data['book_m']->getBookDetails($cmt->getBookId()) ?>
                                    <td><?php echo $book->getName() ?></td>
                                    <?php $user = $data['user_m']->getUserById($cmt->getUserId()) ?>
                                    <td> <?php echo $user->getName() ?></td>

                                  
                                    <td><?php echo $cmt->getText() ?></td>


                                    <td><a class="btn btn-sm btn-danger" href="deleteCmt?cmt_id=<?php echo $cmt->getId() ?>">Delete</a></td>
                                </tr>
                                <?php $i++; endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>