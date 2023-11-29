<?php
class DeletePublisher extends MainController
{
    public function index()
    {
        $publisher_m = $this->loadModel('publisherModel');

        if (isset($_GET['publisher_id']) && !empty($_GET['publisher_id']))
        {
            $publisher_m->deletePublisher($_GET['publisher_id']);
            header("location:publisherController");
        }
    }
}
?>