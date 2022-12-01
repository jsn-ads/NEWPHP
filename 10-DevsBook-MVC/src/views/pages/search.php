<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">

        <?= $render('/sidebar' , ['menuActive' => 'search']);?>
        
        <section class="feed">

            <h1>vc pesquisou por : <?=$filtroPesquisa;?></h1>

        </section>

</section>

<?= $render('/footer');?>