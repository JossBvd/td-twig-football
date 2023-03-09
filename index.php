<?php

require_once "vendor/autoload.php";
require_once "models/data.php";

$loader = new Twig\Loader\FilesystemLoader("templates");

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

$twig->addExtension(new Twig\Extension\DebugExtension);

$datas = getData();

echo $twig->render("index.html.twig", [
    "players" => $datas,
]);

