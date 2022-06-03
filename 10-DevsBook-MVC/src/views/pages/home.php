<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">

    <?= $render('/sidebar');?>
        
    <section class="feed mt-10">
        
        <div class="row">

            <div class="column pr-5">

                <?= $render('/feed-new', ['user'=>$loggedUser]);?>

                <?= $render('/feed-item',['user'=>$loggedUser])?>

            </div>

            <div class="column side pl-5">
                <div class="box banners">
                    <div class="box-header">
                        <div class="box-header-text">Patrocinios</div>
                        <div class="box-header-buttons">
                            
                        </div>
                    </div>
                    <div class="box-body">
                        <a href=""><img src="<?=$base;?>/assets/img/vue.jpg" /></a>
                        <a href=""><img src="<?=$base;?>/assets/img/laravel.png" /></a>
                    </div>
                </div>
                <div class="box">
                    <div class="box-body m-10">
                        Criado com ❤️ por B7Web
                    </div>
                </div>
            </div>

        </div>

    </section>

</section>

<?= $render('/footer');?>