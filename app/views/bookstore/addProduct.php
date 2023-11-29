<div class="bg-light rounded h-100 p-4">
    <form action="" method="post" enctype="multipart/form-data">
                <h6 class="mb-4">Add New Book</h6>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Book name here"
                    name="name"
                  />
                  <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Price"
                    name="price"
                  />
                  <label for="floatingPassword">Price</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Price"
                    name="quantity"
                  />
                  <label for="floatingPassword">Quantity</label>
                </div>
                <div class="form-floating mb-3">
                  <select
                    name="author"
                    class="form-select"
                    id="floatingSelect"
                    aria-label="Floating label select example"
                  >
                    <option selected>Select Author</option>
                    <?php foreach($data['author_all'] as $row): ?>
                    <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="floatingSelect">Author</label>
                </div>
                <div class="form-floating mb-3">
                  <select
                    name="publisher"
                    class="form-select"
                    id="floatingSelects"
                    aria-label="Floating label select example"
                  >
                    <option selected>Select Publisher</option>
                    <?php foreach($data['publisher_all'] as $row): ?>
                    <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="floatingSelects">Publisher</label>
                </div>
                <div class="form-floating">
                  <textarea
                    name="des"
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea"
                    style="height: 150px"
                  ></textarea>
                  <label for="floatingTextarea">Description</label>
                </div>
                <h6 class="mb-4">File Input</h6>
                <div class="mb-3">
                  <label for="formFile" class="form-label"
                    >Image file</label
                  >
                  <input class="form-control" name="img" type="file" id="formFile" />
                </div>
                <input type="hidden" name="date" value=<?php echo date('Y-m-d') ?>">
                <button type="submit"  class="btn btn-primary">Add New</button>
                </form>
              </div>