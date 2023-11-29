<?php $author = $data['author'] ?>
<div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Author Form</h6>
                <form method="post">
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
                      value="<?php echo $author->getName()  ?>"
                    />
                    <input type="hidden" name="hidden_id" id="" value="<?php echo $author->getId() ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>