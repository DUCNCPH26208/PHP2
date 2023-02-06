<?php

$ctr = $GET['ctr'] ?? 'home'; // 2 dấu hỏi chấm tương đương if ctr = rỗng

switch ($ctr) {
    case '':
    case 'home':
        include_once "views/home.php";
        break;
    case 'contact':
        include_once "views/contact.php";
        break;
    case 'about':
        include_once "views/about.php";
        break;
    default:
        include_once "views/404.php";
        break;
}
