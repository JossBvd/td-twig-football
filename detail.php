<?php

require_once "vendor/autoload.php";
require_once "models/data.php";

$loader = new Twig\Loader\FilesystemLoader("templates");

$twig = new Twig\Environment($loader, [
    "debug" => true
]);

$twig->addExtension(new Twig\Extension\DebugExtension);

$datas = getData();
$datas2 = getData2();

echo $twig->render("detail.html.twig", [
    "players" => $datas,
    "getPlayer" => $datas2
]);
