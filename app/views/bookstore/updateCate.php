<?php
$cate = $data['cate_update'];
if ($data['cate_update'] != null){
?>
<div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Update Category</h6>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form mb-3">
            <label for="id">ID Category</label>

            <input type="text" name="id" class="form-control" id="id"  value="<?php echo $cate->getId() ?>">
        </div>
        <div class="form mb-3"> <label for="pw">Name Category</label>

            <input type="text" name="name" class="form-control" id="pw" value="<?php echo $cate->getName() ?>">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image Category</label>
            <input class="form-control" name="img" type="file" id="formFile" value="<?php echo $cate->getImg() ?>">
        </div>
        <input type="hidden" name="old_id" value="<?php echo $cate->getId() ?>">
        <button type="submit" name="update_cate" class="btn btn-primary">Update</button>
    </form>
</div>
<?php } else { ?>
        <h1>Category not found</h1>
    <?php
} ?>