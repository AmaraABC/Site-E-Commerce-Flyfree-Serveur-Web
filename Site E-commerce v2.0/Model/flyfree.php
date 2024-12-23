<?php

class flyfree
{
    public static function connexion()
    {
        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=flyfree', 'postgres', 'epiphany212RA_');
            // echo "Connexion à la base de données effectuée avec succès !";
            return $bdd;
        } catch (Exception $e) {
            echo $e;
        }
    }
}

flyfree::connexion();
