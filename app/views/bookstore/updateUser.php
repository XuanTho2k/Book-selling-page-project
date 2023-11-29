<?php $user = $data['user'] ?>
<div class="bg-light rounded h-100 p-4">
    <form action="" method="post" enctype="multipart/form-data">
                <h6 class="mb-4">Update User</h6>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Book name here"
                    name="name"
                    value="<?php echo $user->getName() ?>"
                  />
                  <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="email"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Price"
                    name="email"
                    value="<?php echo $user->getEmail() ?>"
                  />
                  <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="password"
                    class="form-control"
                    id="floatingPassword"
                    placeholder="Price"
                    name="pw"
                    value="<?php echo $user->getPw() ?>"
                  />
                  <label for="floatingPassword">Password</label>
                </div>
                <input
                    type="number"
                    class="form-control"
                    id="floatingInput"
                    placeholder="Telephone"
                    name="tel"
                    value="<?php echo $user->getTel() ?>"
                  />
                  <label for="floatingInput"></label>
                  <label for="floatingPassword"></label>
                <div class="form-floating mb-3">
                  <select
                    name="role"
                    class="form-select"
                    id="floatingSelect"
                    aria-label="Floating label select example"
                  >
                  <?php $role = $data['role_m']->getRoleById($user->getRole()) ?>
                    <option value="<?php echo $role->getId() ?>" selected><?php echo $role->getName() ?></option>
                    <?php foreach($data['role_all'] as $row): ?>
                    <option value="<?php echo $row->getId() ?>"><?php echo $row->getName() ?></option>
                    <?php endforeach; ?>
                  </select>
                  <label for="floatingSelect">Role</label>
                </div>
               
               
                <h6 class="mb-4">File Input</h6>
                <div class="mb-3">
                  <label for="formFile" class="form-label"
                    >Image file</label
                  >
                  <input class="form-control" name="img" type="file" id="formFile" />
                </div>
                <input type="hidden" name="hidden_id" value="<?php echo $user->getId() ?>">
                <button type="submit"  class="btn btn-primary">Update</button>
                </form>
              </div>