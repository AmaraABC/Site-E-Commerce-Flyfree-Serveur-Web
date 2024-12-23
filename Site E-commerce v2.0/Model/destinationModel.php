<?php
include('flyfree.php');

class destinationModel
{
    private $destination;

    function __construct()
    {
        $this->destination = flyfree::connexion();
    }

    public function getDestinations()
    {
        return $this->destination->query('SELECT * FROM articles ORDER BY date_fin DESC')->fetchAll(PDO::FETCH_ASSOC);
    }
}
