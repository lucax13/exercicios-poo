<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Livro.php";
$livro = new Livro();

$livro->setTitulo("Mundial do Palmeiras");
$livro->setAutor("Fulano");
$livro->setPaginas(100);
?>

<h2>Acessando/lendo os dados dos objetos</h2>

<ul>
    <li><b>Titulo: <?=$livro->getTitulo()?> </b></li>
    <li><b>Autor:<?=$livro->getAutor()?> </b></li>
    <li><b>Páginas: <?=$livro->getPaginas()?> </b></li>
</ul>

<pre><?=var_dump($livro)?></pre>

</body>
</html>