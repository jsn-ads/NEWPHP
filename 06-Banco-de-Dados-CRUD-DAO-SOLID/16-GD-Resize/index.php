<?php
    $arquivo = '02.jpg';
    $maxWidth = 500;
    $maxHeight = 200;

    list($originalWidth, $originalHeight) = getimagesize($arquivo);
    
    $ratio = $originalWidth / $originalHeight;
    $ratioDes = $maxWidth / $maxHeight;

    $finalWidth = 0;
    $finalHeight = 0;

    if($ratioDes > $ratio){
        $finalWidth = $maxHeight * $ratio;
        $finalHeight = $maxHeight;
    }else{
        $finalHeight = $maxWidth / $ratio;
        $finalWidth = $maxWidth;
    }

    $imagem = imagecreatetruecolor($finalWidth, $finalHeight);
    $originalImg = imagecreatefromjpeg($arquivo);

    imagecopyresampled(
        $imagem,
        $originalImg,
        0,0,0,0,
        $finalWidth, $finalHeight,
        $originalWidth,$originalHeight
    );

    imagejpeg($imagem,'nova_imagem.jpg', 100);
?>