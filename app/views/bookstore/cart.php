<?php
if (!isset($sumPrice)) {
    $sumPrice = 0;
}

if(isset($_POST['shipper'])){
    $value = $_POST['shipper'];
    $ship = explode('_', $value );
    $ship_id = $ship[1];
    $ship_price = $ship[0];
    var_dump($ship);
}

?>
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">

                    <?php foreach ($_SESSION['carts'] as $index => $book) { ?>
                        <tr>
                            <td class="align-middle"><img src="<?php echo ASSETS ?>bookstore/img/<?php echo $book['img'] ?>" alt="" style="width: 50px;margin-left:0;"> <?php echo $book['name'] ?></td>
                            <td class="align-middle">$<?php echo $book['price'] ?>.00</td>
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
                            <td class="align-middle total-price">$<?php echo $book['price'] ?>.00</td>
                            <td class="align-middle">
                                <form action="cart" method="post">
                                    <input type="hidden" name="index" value="<?php echo $index ?>">

                                    <button type="submit" name="btn-del-one-cart" class="btn btn-sm btn-danger">
                                        <i class="fa fa-times"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php $sumPrice += $book['price'];
                    } ?>


                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6><?php echo $sumPrice ?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <div class="btn-group">
                            <form action="cart" method="post">
                               
                                <select name="shipper" class="custom-select">
                                    <?php foreach ($data['shipper_all'] as $row) { ?>

                                        <option  <?php if (isset($_POST['shipper']) && $ship_id == ($row->getId())) {
                                                    echo "selected";
                                                } ?>  value="<?php echo $row->getPrice() ?>_<?php echo $row->getId() ?>" ><?php echo $row->getName() ?> </option>
                                    <?php  } ?>

                                </select>
                                <br>
                                <button class="btn btn-success" type="submit">Choose </button>
                            </form>
                        </div>
                        <h6 class="font-weight-medium price" id="price">$<?php if (isset($ship_price)) {
                                                                                echo $ship_price;
                                                                            } else {
                                                                                echo '';
                                                                            }
                                                                            ?>.00</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <?php if (isset($ship_price)) {
                            $sumPrice += $ship_price;
                        } else { echo $sumPrice;} ?>
                        <h5><?php echo $sumPrice ?></h5>
                    </div>
                    <?php if (isset($_SESSION['user'])) { ?>
                        <form action="checkout" method="post">
                            <input type="hidden" name="sumprice" value="<?php echo $sumPrice ?>">
                            <input type="hidden" name="ship" value="<?php if(isset($ship_price)){ echo $ship_price; } else { echo "";} ?>">
                            <input type="hidden" name="ship_id" value="<?php if(isset($ship_id)){ echo $ship_id; } else { echo "";} ?>">
                            <button type="submit" name="btn-check-out" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>

                        </form>
                    <?php  } else { ?>
                        <a href="login" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Please Login to Checkout</a>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart End -->