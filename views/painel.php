<?php

require_once('./views/header.php'); 
if(file_exists('./views/' . $page . '.php') && !is_dir('./views/' . $page . '.php')){
    require_once('./views/' . $page . '.php');
} else{
    echo 'Arquivo Não Encontrado ./views/' . $page . '.php';
}

require_once('./views/footer.php');

