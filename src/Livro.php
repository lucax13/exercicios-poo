<?php

class Livro
{
    private string $titulo;
    private string $autor;

    public function __construct(string $titulo, string $autor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
    }

    private function setTitulo(string $titulo): void
    {
        $this-> titulo = $titulo;
    }

    private function setAutor(string $autor): void
    {
        $this-> autor = $autor;
    }
 
    

    public function getTitulo(): string
    {
        return $this-> titulo;
    }

    public function getAutor(): string
    {
        return $this-> autor;
    }

}    
?>