<?php
if (isset($data['book'])) {
    $book = $data['book'];
}
?>

<div class="bg-light rounded h-100 p-4">
    <form action="" method="post" enctype="multipart/form-data">
        <h6 class="mb-4">Update Book</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Book name here" name="name" value="<?php echo $book->getName() ?>" />
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Price" name="price" value="<?php echo $book->getPrice() ?>" />
            <label for="floatingPassword">Price</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Price" name="quantity" value="<?php echo $book->getQuantity() ?>" />
            <label for="floatingPassword">Quantity</label>
        </div>
        <div class="form-floating mb-3">
            <select name="author" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <?php $author = $data['author_m']->getAuthorById($book->getAuthor()); ?>
                <option selected value="<?php echo $author->getId() ?>"><?php echo $author->getName()  ?></option>
                <?php foreach ($data['author_all'] as $row) : ?>
                    <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
                <?php endforeach; ?>
            </select>
            <label for="floatingSelect">Author</label>
        </div>
        <div class="form-floating mb-3">
            <select name="publisher" class="form-select" id="floatingSelects" aria-label="Floating label select example">
                <?php $publisher = $data['publisher_m']->getPublisherById($book->getPublisher()); ?>
                <option value="<?php echo $publisher->getId() ?>" selected><?php echo $publisher->getName()  ?></option>
                <?php foreach ($data['publisher_all'] as $row) : ?>
                    <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
                <?php endforeach; ?>
            </select>
            <label for="floatingSelects">Publisher</label>
        </div>
        <div class="form-floating">
            <textarea name="des" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px"><?php echo $book->getDes() ?></textarea>
            <label for="floatingTextarea">Description</label>
        </div>
        <h6 class="mb-4">File Input</h6>
        <div class="mb-3">
            <label for="formFile" class="form-label">Image file</label>
            <input class="form-control" name="img" type="file" id="formFile" />
        </div>
        <input type="hidden" name="hidden_id" value=<?php echo $book->getId() ?>>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>