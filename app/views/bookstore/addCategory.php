<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Add New Category</h6>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form mb-3">
            <label for="id">ID Category</label>

            <input type="text" name="id" class="form-control" id="id" placeholder="ID number">
        </div>
        <div class="form mb-3"> <label for="pw">Name Category</label>

            <input type="text" name="name" class="form-control" id="pw" placeholder="Insert name here">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image Category</label>
            <input class="form-control" name="img" type="file" id="formFile" placeholder="Image for category">
        </div>
        <div class="form-floating mb-3">
            <select name="parent" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Open this select menu</option>
                <?php foreach($data['cate_all'] as $row): ?>
                <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
               <?php endforeach; ?> 
            </select>
            <label for="floatingSelect">Select parent category</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="des" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
            <label for="floatingTextarea">Description</label>
        </div>

        <button type="submit" name="add_cate" class="btn btn-primary">Add New</button>
    </form>
</div>