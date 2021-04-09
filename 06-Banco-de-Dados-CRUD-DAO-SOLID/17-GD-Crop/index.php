<?php
    $arquivo = '02.jpg';
    $width = 300;
    $height = 300;

    list($originalWidth, $originalHeight) = getimagesize($arquivo);
    
    $ratio = $originalWidth / $originalHeight;
    $ratioDes = $width / $height;

    $finalWidth = 0;
    $finalHeight = 0;
    $finalX = 0;
    $finalY = 0;

    if($ratioDes > $ratio){
        $finalWidth = $height * $ratio;
        $finalHeight = $height;
    }else{
        $finalHeight = $width / $ratio;
        $finalWidth = $width;
    }

    if($finalWidth < $width){
        $finalWidth = $width;
        $finalHeight = $width / $ratio;

        $finalY = -(($finalHeight - $height)/2);
    }else{
        $finalHeight = $height;
        $finalWidth = $height * $ratio;

        $finalX = -(($finalWidth - $width)/2);
    }

    $imagem = imagecreatetruecolor($width, $height);
    $originalImg = imagecreatefromjpeg($arquivo);

    imagecopyresampled(
        $imagem,
        $originalImg,
        $finalX,$finalY,0,0,
        $finalWidth, $finalHeight,
        $originalWidth,$originalHeight
    );

    imagejpeg($imagem,'nova_imagem.jpg', 100);
?>$width