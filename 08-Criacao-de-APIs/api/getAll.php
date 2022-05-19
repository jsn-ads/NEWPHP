<?php
    require('../config.php');

    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if($method === 'get'){

        $sql = $pdo->query('SELECT * FROM notes');

        if($sql->rowCount() > 0){
            
            $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($dados as $item){
                $array['result'][] = [
                    'id' => $item['id'],
                    'title' => $item['title']
                ];
            }
        }
        
    }else{
        $array['error'] = 'Método não permitido (Apenas GET)';
    }

    require('../return.php');
?>