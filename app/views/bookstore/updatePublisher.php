<?php $publisher = $data['publisher'] ?>
<div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Publisher Form</h6>
                <form method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Name</label
                    >
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                      value="<?php echo $publisher->getName()  ?>"
                    />
                    <h6 class="mb-4">File Input</h6>
                <div class="mb-3">
                  <label for="formFile" class="form-label"
                    >Image</label
                  >
                  <input class="form-control" type="file" name="img" id="formFile" />
                </div> 
                    <input type="hidden" name="hidden_id" id="" value="<?php echo $publisher->getId() ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>