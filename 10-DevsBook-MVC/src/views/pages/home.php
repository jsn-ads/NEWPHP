<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">

    <?= $render('/sidebar',['menuActive'=> 'home']);?>
        
    <section class="feed mt-10">
        
        <div class="row">

            <div class="column pr-5">

                <?= $render('/feed-new', ['user'=>$loggedUser]);?>

                <?php foreach($feed['posts'] as $item):?>
                    <?= $render('/feed-item',[
                                                'data'          => $item,
                                                'loggedUser'    => $loggedUser
                                             ]);?>
                <?php endforeach;?>

                <div class="feed-pagination">
                    <?php for($i = 0; $i < $feed['pagination'];$i++):?>
                        <a  class="<?=($i == $feed['page'] ? 'active':'')?>"  href="<?=$base;?>/?page=<?=$i;?>"><?=$i+1;?></a>
                    <?php endfor;?>
                </div>
                
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