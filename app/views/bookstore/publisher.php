<div>
<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-0">Publisher Table</h6>
    <a href="addPublisher" class="btn btn-outline-primary">Add New Publisher</a>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['publisher_all'] as $row) : ?>
            <tr>
                <th scope="row"><?php echo $row->getId() ?></th>
                <td><?php echo $row->getName() ?></td>
                <td><img style="width:300px;" src="<?php echo ASSETS ?>bookstore/img/<?php echo $row->getImg() ?>" alt=""></td>
                <td>
                    <a class="btn btn-primary" href="updatePublisher?publisher_id=<?php echo $row->getId() ?>">Update</a>
                    <a class="btn btn-danger" href="deletePublisher?publisher_id=<?php echo $row->getId() ?>">Delete</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>