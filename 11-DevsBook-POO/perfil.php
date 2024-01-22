<?php
    require 'config.php';
    require 'models/Auth.php';
    require 'dao/PostDaoMysql.php';

    $auth = new Auth($pdo, $base);
    $userInfo = $auth->checkToken();
    $activeMenu = 'profile';

    require 'partials/header.php';
    require 'partials/menu.php';
?>

<section class="feed">
    ...
</section>

<?php
    require 'partials/footer.php';
?>