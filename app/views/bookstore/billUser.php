<div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Your Bills</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col"> Name</th>
                                            <th scope="col"> Phone</th>
                                            <th scope="col"> Date</th>
                                            <th scope="col"> Address</th>
                                            <th scope="col"> Total</th>
                                            <th scope="col"> Shipper</th>
                                            <th scope="col"> Quantity</th>
                                            <th scope="col"> Status</th>
                                            <th scope="col"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; foreach($data['bill_all'] as $row): ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row->getUserName() ?></td>
                                            <td><?php echo $row->getUserTel() ?></td>
                                            <td><?php echo $row->getDate() ?></td>
                                            <td><?php echo $row->getAddr() ?></td>
                                            <td>$<?php echo $row->getTotal() ?>.00</td>
                                            <td><?php $shipper = $data['shipper_m']->getShipperById($row->getShipper()) ; echo $shipper->getName() ?></td>
                                            <td><?php echo $row->getQuantity() ?></td>
                                            <td><?php echo $row->getStatus() ?></td>
                                            <td><a class="btn btn-success" href="billUserDetail?bill_id=<?php echo $row->getId()?>">Detail</a>
                                                <a class="btn btn-danger" href="billUserDelete?bill_id=<?php echo $row->getId() ?>">Cancel</a></td>
                                            
                                        </tr>
                                      <?php $i++; endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>