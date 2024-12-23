<?php
include('./Model/flyfree.php');

$destination = new flyfree;
$destinations = $destination::connexion();
