<?php

class Movie
{

    public $titolo;
    // public $genere;
    public $generi;
    public $voto;

    public function __construct($titolo, $generi, $voto)
    {
        $this->titolo = $titolo;
        $this->generi = $generi;
        $this->voto = $voto;
    }

    public function getFullInfo()
    {
        return 'Titolo: ' . $this->titolo .
            '<br />' . 'Generi: ' . $this->getFullGeneri() .
            '<br />' . 'Voto: ' . $this->voto;
    }

    public function getFullGeneri()
    {
        $generi = '';
        foreach ($this->generi as $genere) {
            // $generi .= ' ' . $genere; // SOLUZIONE CON ARRAY SENZA UTILIZZARE UNA NUOVA CLASSE
            $generi .= $genere->genere1 . ', ' . $genere->genere2 . ', ' . $genere->genere3;
        }
        return $generi;
    }
}
