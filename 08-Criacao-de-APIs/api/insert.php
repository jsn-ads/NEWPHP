<?php
    require('../config.php');

    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if($method === 'post'){
        
        $title = filter_input(INPUT_POST,'title');

        $body =  filter_input(INPUT_POST,'body');

        if($title && $body){

            $sql = $pdo->prepare('INSERT INTO notes SET title=:title , body=:body');
            $sql->bindValue(':title',$title);
            $sql->bindValue(':body',$body);
            $sql->execute();

            //retorna o id o objeto adicionado
            $id = $pdo->lastInsertId();

            $array['result'] = [
                'id'    => $id,
                'title' => $title,
                'body'  => $body 
            ];

        }else{
            $array['error'] = 'Campos estão Vazio';
        }

    }else{
        $array['error'] = 'metodo não permitido(Apenas POST)';
    }

    require('../return.php');
?>