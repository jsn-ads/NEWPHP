<?php
    $imagem = imagecreatetruecolor(300,300);

    $cor = imagecolorallocate($imagem, 255,0,0);

    imagefill($imagem,0,0,$cor);

    imagejpeg($imagem,'nova_imagem.jpg',100);
?>