<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Livro.php";
require_once "src/Literario.php";
require_once "src/enums/genero.php";
require_once "src/Tecnico.php";
require_once "src/Progrmacao.php";
require_once "src/enums/Formato.php";

$literario = new Literario("incrivel mundo de bob", "Pietro lima", Genero::Aventura);

$tecnico = new Tecnico("Tecnologo de programas de maquina", "tiago binho", Formato::Digital);

$progrmacao = new Progrmacao("Desenvolvedor C++", "Miranda Binho", "C++", Formato::Fisico);
?>

<h2>Acessando/lendo os dados dos objetos</h2>

<ul>
    <li><b>Titulo: <?=$literario->getTitulo()?> </b></li>
    <li><b>Autor: <?=$literario->getAutor()?> </b></li>
    <li><b>Genero: <?=$literario->getGenero()->name ?></b></li>
</ul>

<ul>
    <li><b>Titulo: <?=$tecnico->getTitulo()?> </b></li>
    <li><b>Autor: <?=$tecnico->getAutor()?></b></li>
    <li><b>Formato: <?=$tecnico->getFormato()->name?></b></li>
</ul>

<ul>
    <li><b>Titulo: <?=$progrmacao->getTitulo()?></b></li>
    <li><b>Autor: <?=$progrmacao->getAutor()?></b></li>
    <li><b>Programação: <?=$progrmacao->getLinguagem()?></b></li>
</ul>


</body>
</html>