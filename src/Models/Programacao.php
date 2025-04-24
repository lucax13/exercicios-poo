<?php
class Programacao extends Tecnico {
    private  string $linguagem;

    public function __construct(string $titulo, string $autor, string $linguagem, Formato $formato)
    {
        parent:: __construct($titulo, $autor, $formato);

        $this->setLinguagem($linguagem);
    }

    private function setLinguagem(string $linguagem)
    {
        $this->linguagem= $linguagem;
    }

    public function getLinguagem(): string
    {
        return $this->linguagem;
    }
}