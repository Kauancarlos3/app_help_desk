<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] .'#'. $titulo . '#' . $categoria . '#' . $descricao. PHP_EOL;

    $arquivo = fopen('arquivo.txt','a');// o prumeiro paramento para a função fopen é o nomo do arquivo(caso ele não exista, ele será criado). O segundo parametro é para dizer o que vai fazer, na documentação tem os valores e o que eles fazem.

    fwrite($arquivo, $texto);// O primeiro parametro é a referencia do arquivo que abrimos la em cima , o seugundo é: O que é que eu quero escrever dentro desse arquivo

    fclose($arquivo);//fechando o arquivo
    //echo $texto;

    header('Location: abrir_chamado.php');
?>