<?php 


    function showArray($array){
        echo"<pre>";
        print_r($array);
        echo"</pre>";
    }


    function drawPage($datas_page){
        // showArray($datas_page);
        extract($datas_page);
        
        ob_start();
        require_once $view;
        $content = ob_get_clean();
        require_once $layout;
        
    }

    function sendJson_get($datas){
        //Tous les sites y ont accès
        header('Access-Control-Allow-Origin: *');
    //On autorise seulement la méthode GET
        header('Access-Control-Allow-Methods:GET: *');
        //On envoie en Json
        header('Content-Type: application/json');
    echo json_encode($datas, JSON_PRETTY_PRINT);
    }