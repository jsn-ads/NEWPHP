<?= $render('/header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">
    
    <?= $render('/sidebar',['menuActive'=> 'configuracao']);?>
    
   
    <section class="feed mt-10">
    
        <hr/>

        <form action="" method="post">

            <div class="form-group">
                <label for="my-input">Text</label>
                <input id="my-input" class="form-control" type="text" name="">
            </div>

        </form>

    </section>

</section>

<?= $render('/footer');?>