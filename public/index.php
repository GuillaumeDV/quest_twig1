<?php
require '../vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader, [

    'cache' => false, //__DIR__ . '/tmp'

]);

echo $twig->render('index.html.twig', ['products'=>[

    'product1',
    'product2',
    'product3',
    'product4',
    'product5',
]]);