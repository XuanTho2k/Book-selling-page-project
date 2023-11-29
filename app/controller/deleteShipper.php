<?php
class DeleteShipper extends MainController
{
    public function index()
    {
        $shipper_m = $this->loadModel('shipperModel');

        if (isset($_GET['shipper_id']) && !empty($_GET['shipper_id']))
        {
            $shipper_m->deleteShipper($_GET['shipper_id']);
            header("location:shipperController");
        }
    }
}
?>