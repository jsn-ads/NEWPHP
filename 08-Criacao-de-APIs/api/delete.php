<?php
    require('../config.php');

    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if($method === 'delete'){
        
        parse_str(file_get_contents('php://input'), $input);

        $id = filter_var($input['id'] ?? null);

        if($id){

            $sql = $pdo->prepare('DELETE FROM notes WHERE id = :id');
            $sql->bindValue(':id',$id);
            $sql->execute();

        }else{
            $array['error'] = 'Id não informado';
        }

    }else{
        $array['error'] = 'metodo não permitido(Apenas DELETE)';
    }

    require('../return.php');
?>