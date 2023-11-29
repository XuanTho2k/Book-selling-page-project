
<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Book Table</h6>
                            <div class="d-flex align-items-center justify-content-between mb-4">

                        <a href="addShipper" class="btn btn-outline-primary">Add New Shipper</a>
                    </div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th> 
            <th scope="col">Price</th> 
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['shipper_all'] as $row) : ?>
            <tr>
                <th scope="row"><?php echo $row->getId() ?></th>
                <td><?php echo $row->getName() ?></td>
                <td><img style="width:300px;" src="<?php echo ASSETS ?>bookstore/img/<?php echo $row->getImg() ?>" alt=""></td>
                <td>$<?php echo $row->getPrice() ?>.00</td>
                <td>
                    <a class="btn btn-primary" href="updateShipper?shipper_id=<?php echo $row->getId() ?>">Update</a>
                    <a class="btn btn-danger" href="deleteShipper?shipper_id=<?php echo $row->getId() ?>">Delete</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

