<aside class="mt-10">
    <nav>
        <a href="">
            <div class="menu-item <?=($menuActive == 'home') ? 'active':''?>">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/home-run.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?=$base;?>/">Home</a>
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-item <?=($menuActive == 'profile') ? 'active':''?>">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/user.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?=$base;?>/perfil">Meu Perfil</a>
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-item <?=($menuActive == 'friends') ? 'active':''?>">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/friends.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?=$base;?>/amigos">Amigos</a>
                </div>
                <div class="menu-item-badge">
                    33
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-item <?=($menuActive == 'photos') ? 'active':''?>">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/photo.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?=$base;?>/fotos">Fotos</a>
                </div>
            </div>
        </a>
        <div class="menu-splitter"></div>
        <a href="">
            <div class="menu-item <?=($menuActive == 'configuracao') ? 'active':''?>">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/settings.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?=$base;?>/configuracao">Configurações</a>
                </div>
            </div>
        </a>
        <a href="">
            <div class="menu-item">
                <div class="menu-item-icon">
                    <img src="<?=$base;?>/assets/images/power.png" width="16" height="16" />
                </div>
                <div class="menu-item-text">
                    <a href="<?= $base;?>/sair">Sair</a>
                </div>
            </div>
        </a>
    </nav>
</aside>