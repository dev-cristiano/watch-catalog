<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'sobre':
        include 'pages/sobre.php';
        break;
    case 'contato':
        include 'pages/contato.php';
        break;
    default:
        include 'pages/home.php';
        break;
}
?>