<?php

class Movie
{

    public $titolo;
    public $genere;
    public $voto;

    public function __construct($titolo, $genere, $voto)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->voto = $voto;
    }

    public function getFullinfo()
    {
        return $this->titolo . ' - ' . $this->genere . ' - ' . $this->voto;
    }
}
