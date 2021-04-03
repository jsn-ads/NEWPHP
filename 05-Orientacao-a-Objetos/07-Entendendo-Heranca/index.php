<?php
    require ('pessoa.class.php');

    $p1 = new Pessoa();

    $p1->setNome("Jose Neto");
    $p1->setIdade(31);
    $p1->setRua("Rua MMM10 QD 36 LT 38 CASA 02");
    $p1->setCep(74369660);
    $p1->setCidade("Goiânia");
    $p1->setEstado("Goias");
?>

<pre>
    <?php print_r($p1);?>
</pre>