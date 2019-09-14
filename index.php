<?php

$page  = (isset($_GET['page'])) ? $_GET['page'] : '';

if(!empty($page)){
    require_once('./views/painel.php');
} else {
    require_once('./views/login.php');
}