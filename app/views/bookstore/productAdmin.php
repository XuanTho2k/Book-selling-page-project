<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Book Table</h6>
                            <div class="d-flex align-items-center justify-content-between mb-4">

                        <a href="addProduct" class="btn btn-outline-primary">Add New Book</a>
                    </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Img</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Publisher</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['book_all'] as $row): ?>
                                        <tr>
                                            <th scope="row"><?php echo $row->getId() ?></th>
                                            <td><img style="width: 300px;" src="<?php echo ASSETS ?>bookstore/img/<?php echo $row->getImg() ?>" alt=""></td>
                                            <td><?php echo $row->getName() ?></td>
                                            <td><textarea class="form-control" name="" id="" cols="30" rows="10"><?php echo $row->getDes() ?> </textarea></td>
                                            <td><?php echo $row->getPrice() ?></td>
                                            <td><?php  $author = $data['author_model']->getAuthorById($row->getAuthor());
                                                        echo $author->getName() ?>   </td>
                                            <td><?php  $publisher = $data['publisher_model']->getPublisherById($row->getPublisher());
                                                        echo $publisher->getName() ?></td>
                                            <td><?php echo $row->getQuantity() ?></td>
                                            <td><a class="btn btn-primary" href="updateProduct?book_id=<?php echo $row->getId() ?>">Update Book</a>
                                                <a class="btn btn-danger" href="deleteProduct?book_id=<?php echo $row->getId() ?>">Delete Book</a></td>
                                        </tr>
                                       <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>