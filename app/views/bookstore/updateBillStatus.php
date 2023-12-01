<?php $bill = $data['bill'] ?>
<form method="post">

<h2 class="mb-4">Select Bill Status</h6>
    <select name="status_id" class="form-select" multiple aria-label="multiple select example">
        <option>Open this select menu</option>
        <?php  foreach  ($data['status'] as $status) :?>
        <option <?php if ($status['status_id'] == $bill->getStatus()){ echo "selected";}  ?>  value="<?php echo $status['status_id'] ?>"><?php echo $status['status_name'] ?></option>

       <?php endforeach; ?> 
    </select>
    <input type="hidden" name="hidden_id" value="<?php echo $bill->getId() ?>">
    <button class="btn btn-info" type="submit">Chosse</button>
</form>