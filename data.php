<?php
function extractdata($path){
    $text = file_get_contents($path);
    $text = explode("\n", $text);

    $list = array();

    for ($i = 0; $i < count($text); $i++){
        $etudiant = explode(" ",$text[$i]);
        $list[] = [
            "nom"=> $etudiant[1],
            "prenom"=> $etudiant[2],
            "cne"=> $etudiant[3],
        ];
    }

    return $list;
}