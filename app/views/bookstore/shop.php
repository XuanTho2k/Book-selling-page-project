<?php 
?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Logo -->
    <div style="margin-left:25rem;">
    <?php
    if(isset($_GET['author_id'])) {
        echo '<h1 style="color:#ffd334">'.$data['author']->getName().'</h1>';
    } else if (isset($_GET['publisher_id'])){
        echo '<img class="img-fluid" style="width:200px;height:200px;" src='.ASSETS.'bookstore/img/'.$data['publisher']->getImg().'>';
    } else if (isset($_GET['cate_id'])){
        echo '<h1 style="color:#ffd334">'.$data['cate']->getName().'</h1>';
    }
    ?>
    </div>

    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by price</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <?php $i=1; foreach( $data['publisher_all'] as $row): ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" name="publisher_id" value="<?php echo $row->getId() ?>" id="price-<?php echo $i ?>">
                            <label class="custom-control-label" for="price-<?php echo $i; ?>"><?php echo $row->getName() ?></label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <?php  $i++; endforeach; ?>
                       <div>
                        <button style="margin-top:10px;" type="submit" class="btn btn-warning">Search</button>
                        </div>
                    </form>
                </div>
                
                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by Category</span></h5>
                <div class="bg-light p-4 mb-30">
                    <form method="get">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name="" value="" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">All Category</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <?php $i=1; foreach($data['cate_all'] as $row) { ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name="cate_id" value="<?php echo $row->getId() ?>" class="custom-control-input" id="color-<?php echo $i; ?>">
                            <label class="custom-control-label" for="color-<?php echo $i;?>"><?php echo $row->getName() ?></label>
                            <span class="badge border font-weight-normal"><?php echo $row->getCapacity() ?></span>
                        </div>
                        <?php  $i++;} ?>
                       <button type="submit" class="btn btn-warning">Search</button> 
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Filter by Author</span></h5>
                <div class="bg-light p-4 mb-30">
                    <for>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">All Author</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <?php $i=1; foreach($data['author_all'] as $row) { ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name="author_id" value="<?php ?>" class="custom-control-input" id="size-<?php echo $i; ?>">
                            <label class="custom-control-label" for="size-<?php echo $i; ?>"><?php echo $row->getName() ?></label>
                            <span class="badge border font-weight-normal"></span>
                        </div>
                       <?php $i++; } ?>
                       <button type="submit" class="btn btn-warning">Search</button>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Latest</a>
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Best Rating</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach($data['books'] as $row) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                        <div class="product-item bg-light mb-4">
                            <div class="product-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?php echo ASSETS ?>/bookstore/img/<?php echo $row->getImg() ?>" alt="">
                                <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="detail?book_id=<?php echo $row->getId() ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row->getName() ?></a>
                                <div class="d-flex align-items-center justify-content-center mt-2">
                                    <h5>$<?php echo $row->getPrice() ?>.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small class="fa fa-star text-primary mr-1"></small>
                                    <small>(99)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-12">
                        <nav>
                          <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->

