<?php


class library
{
    const MAX_BOOKS = 5;
    private $name;
    private $adress;
    private $max;
    private $books = array();

    public function __construct($nom, $adresse, $maxi){
        $this->name = $nom;
        $this->adress = $adresse;
        $this->max = $maxi;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($nom){
        $this->name = $nom;
    }

    public function getAdress(){
        return $this->adress;
    }
    public function setAdress($adresse){
        $this->adress = $adresse;
    }

    public function getMax(){
        return $this->Max;
    }
    public function setMax($maxi){
        $this->max = $maxi;
    }

    public function showBooks(){
        foreach($this->books as $livre){
            $livre->showBook();
        }
    }
    public function addBook($livre){
        $books[] = $livre;
    }
    public function delBook($delLivre){
        foreach ($this->books as $livre){
            if ($livre == $delLivre){
                unset($livre);
            }
        }
     }
    public function delDoublLivres(){
        foreach ($this->books as $livre1){
            foreach ($this->books as $livre2){
                if ($livre2 == $livre1){
                    unset($livre2);
                }
            }
        }
    }

    public function compare ($library){
        foreach ($library::$books as $livre1){
            foreach ($this->books as $livre2){
                if ($livre1 == $livre2){
                    $livre2->showBook();
                    break;
                }
            }
        }
    }

    public function triBookAuth(){
        $livreVerre = NULL;
        foreach($this->books as $livre){
            foreach ($this->books as $livre2){
                if ($livre == $livre2){}
            }
        }
    }
}