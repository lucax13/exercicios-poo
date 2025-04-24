<?php

class Literario extends Livro {
    
    private Genero $genero ;

    public function __construct(string $titulo, string $autor, Genero $genero)
    {
        parent:: __construct($titulo, $autor);

        $this->setGenero($genero);
    }

    private function setGenero(Genero $genero): void
    {
        $this->genero = $genero;
    }

    public function getGenero(): Genero
    {
        return $this->genero;
    }

}