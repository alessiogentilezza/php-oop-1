<?php

class Movie
{

    public $titolo;
    public $generi;
    public $voto;

    public function __construct(string $titolo, array $generi, float $voto)
    {
        $this->titolo = $titolo;
        $this->generi = $generi;
        $this->voto = $voto;

        foreach ($generi as $genere) {
            if (!$genere instanceof Generi) {
                echo "Ogni elemento dell'array 'generi' deve essere un oggetto di 'GENERI'";
                die();
            }
        }
    }

    public function getFullInfo()
    {
        return
            '<span class="text-primary">Titolo: </span>' . $this->titolo . '<br />'
            . '<span class="text-primary">Generi: </span>' . $this->getFullGeneri() . '<br />'
            . '<span class="text-danger">Voto: </span>' . $this->voto;
    }

    public function getFullGeneri()
    {
        $generi = [];
        foreach ($this->generi as $genere) {
            $generi[] = $genere->tipo;
        }
        return implode(', ', $generi);
    }
}
