<?php

function getData() {
    $players = [
        1 => ["nom" => "Benzema", "prenom" => "Karim", "age" => 34, "taille" => 1.85, "poids" => 81,
        "salaire" => 8000000, "bday" => "1987-12-19"],
        2 => ["nom" => "Mbappe", "prenom" => "Kylian", "age" => 23, "taille" => 1.78, "poids" => 73,
        "salaire" => 22000000, "bday" => "1998-12-20"],
        3 => ["nom" => "Messi", "prenom" => "Lionel", "age" => 34, "taille" => 1.69, "poids" => 67,
        "salaire" => 41000000, "bday" => "1987-06-24"],
        4 => ["nom" => "Ronaldo", "prenom" => "Cristiano", "age" => 37, "taille" => 1.87, "poids" =>
        85, "salaire" => 26000000, "bday" => "1985-02-05"],
        5 => ["nom" => "Da Silva", "prenom" => "Neymar", "age" => 30, "taille" => 1.75, "poids" =>
        68, "salaire" => 40000000, "bday" => "1992-02-05"]
        ];
    return $players;
}

function getData2() {
    $players = [
        1 => ["nom" => "Benzema", "prenom" => "Karim", "age" => 34, "taille" => 1.85, "poids" => 81,
        "salaire" => 8000000, "bday" => "1987-12-19", "img" => "kb9" ],
        2 => ["nom" => "Mbappe", "prenom" => "Kylian", "age" => 23, "taille" => 1.78, "poids" => 73,
        "salaire" => 22000000, "bday" => "1998-12-20", "img" => "mbappe"],
        3 => ["nom" => "Messi", "prenom" => "Lionel", "age" => 34, "taille" => 1.69, "poids" => 67,
        "salaire" => 41000000, "bday" => "1987-06-24", "img" => "messi"],
        4 => ["nom" => "Ronaldo", "prenom" => "Cristiano", "age" => 37, "taille" => 1.87, "poids" =>
        85, "salaire" => 26000000, "bday" => "1985-02-05", "img" => "cr7"],
        5 => ["nom" => "Da Silva", "prenom" => "Neymar", "age" => 30, "taille" => 1.75, "poids" =>
        68, "salaire" => 40000000, "bday" => "1992-02-05", "img" => "neymar"]
        ];
    $getPlayer = $players[$_GET["id"]];
    return $getPlayer;
}