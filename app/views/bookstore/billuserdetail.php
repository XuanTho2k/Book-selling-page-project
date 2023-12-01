<div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle">

                    <?php foreach ($data['book_by_bill'] as $book) { ?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo ASSETS ?>bookstore/img/<?php echo $book->getImg() ?>" alt="" style="width: 50px;margin-left:0;"> <?php echo $book->getName() ?></td>
                            <td class="align-middle">$<?php echo $book->getPrice() ?>.00</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control quantity-input form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle total-price">$<?php echo $book->getPrice() ?>.00</td>
                        </tr>
                    <?php
                    } ?>


                </tbody>
            </table>
            
        </div>
        <div style="margin-left: 55rem">
                <a class="btn btn-success" href="billuser">Back</a>
            </div>