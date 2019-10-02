<?php


class book
{
    private $title;
    private $author;
    private $editor;
    private  $pageNb;

    public function __construct($unTitre, $unAuteur, $unEditeur, $nbPages){
        $this->title = $unTitre;
        $this->author = $unAuteur;
        $this->editor = $unEditeur;
        $this->pageNb = $nbPages;
    }

    public function setTitle($titre){ $this->title = $titre; }
    public function getTitle(){ return $this->title; }

    public function setAuthor($auteur){ $this->author = $auteur; }
    public function getAuthor(){ return $this->author; }

    public function setEditor($Editeur){ $this->editor = $Editeur; }
    public function getEditor(){ return $this->editor; }

    public function setPageNb($nbPages){ $this->pageNb = $nbPages; }
    public function getPageNb(){ return $this->pageNb; }

    public function showBook(){
        echo 'Titre : ', $this->title, PHP_EOL, 'Auteur : ',$this->author,PHP_EOL, 'Editeur : ', $this->editor,PHP_EOL,'Nombre de pages : ', $this->pageNb, PHP_EOL,'<br>';
    }
}