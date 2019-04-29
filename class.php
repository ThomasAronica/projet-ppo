<?php

class produit{

    private $nom;
    private $allée;
    private $colone;
    private $quantité;

    public function ajouter(){
        $this->quantité++;
    }

    public function retirer(){
        $this->quantité--;
    }
}