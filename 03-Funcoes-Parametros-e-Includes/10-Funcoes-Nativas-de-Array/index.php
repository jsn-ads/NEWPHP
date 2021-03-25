<?php
    $lista = [
        "nome1",
        "nome2",
        "nome3",
        "nome4",
        "nome5",
        "nome6"
    ];

    //mostrar o tamanho do array

    echo "Total: ".count($lista);

    //funcao para separar informacoes que não estao nos dois array

    $listaB = [
        "nome3",
        "nome6",
        "nome1"
    ];

    $naoEstaoNasDuasListas = array_diff($lista , $listaB);

    print_r($naoEstaoNasDuasListas);

    echo "<br><br>";

    //Funcao de Filtrar

    $numeros = [9,29,67,32,51,17];

    $filtrados = array_filter($numeros, function($item){
        return ($item < 30)? true: false;
    });

    print_r($filtrados);

    echo "<br><br>";

    //mapear todos itens do array

    $dobro = array_map(function($item){
        return $item * 2;
    },$numeros);

    print_r($dobro);

    //remove o ultimo item da lista;

    array_pop($numeros);

    print_r($numeros);

    echo "<br><br>";

    //remove o primeiro item da lista

    array_shift($numeros);

    print_r($numeros);

    echo "<br><br>";

    //verifica se existe elemento da lista

    echo (in_array(29,$numeros))?"EXISTE":"NAO EXISTE";

    echo "<br><br>";

    //verifica se existe e traz a chave do valor

    echo array_search(29,$numeros);

    echo "<br><br>";

    //organiza em ordem alfabetica ou numerica

    sort($numeros);

    print_r($numeros);

    echo "<br><br>";

    //organiza em ordem descresente

    rsort($numeros);

    print_r($numeros);

    echo "<br><br>";

    //organiza em ordem alfabetica ou numerica sem alterar a chave

    asort($numeros);

    print_r($numeros);

    echo "<br><br>";

    //transforma array em string

    $nome = ["Jose","Cris","Neto"];

    $nome = implode(' ',$nome);

    echo $nome;
?>