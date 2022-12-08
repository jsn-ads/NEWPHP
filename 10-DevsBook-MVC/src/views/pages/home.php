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
                <?=$render('right-side');?>
            </div>

        </div>

    </section>

</section>

<?= $render('/footer');?>