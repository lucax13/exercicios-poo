<?php

class Livro
{
    private string $titulo;
    private string $autor;
    private int $paginas;

    public function __construct(string $titulo, string $autor, int $paginas)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setPaginas($paginas);
    }

    private function setTitulo(string $titulo): void
    {
        $this-> titulo = $titulo;
    }

    private function setAutor(string $autor): void
    {
        $this-> autor = $autor;
    }
 
    private function setPaginas(int $paginas): void
    {
        $this->paginas = $paginas;
    }

    public function getTitulo(): string
    {
        return $this-> titulo;
    }

    public function getAutor(): string
    {
        return $this-> autor;
    }

    public function getPaginas(): int
    {
        return $this-> paginas;
    }
}    
?>