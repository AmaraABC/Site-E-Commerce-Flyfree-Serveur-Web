<?php
include('./Model/destinationModel.php');

class destinationController
{
    private $model;

    public function __construct()
    {
        $this->model = new destinationModel;
    }

    public function destinations()
    {
        $destinations = $this->model->getDestinations();
        include('./View/destination.php');
    }
}
