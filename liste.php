<?php

require_once("data.php");
$path = "etudiants.txt";


$list = extractdata($path);

header("");
$data =  $list;

// traitement du XMLHttpRequest
$q = $_GET["q"];
$type = $_GET["type"];

$suggest = "";
if( strlen( $q ) > 0){
    for( $i = 1; $i < count ($data ); $i++ ){
        if(stristr($data[$i][$type], $q) ){
            $suggest = $suggest . "<p class='suggest'>". $data[$i][$type]. "</p>";
        }
    }
}

if($suggest == ""){
    $response = "Pas de suggestion";
}
else {
    $response = $suggest;
}

//la response

echo $response;























/*
echo "<table border=1>";
echo "<tr>
    <th>Nom</th>
    <th>Prenom</th>
    <th>CNE</th>
    </tr>";
for ($i = 1; $i < count($list); $i++) {
    echo "<tr>";
    foreach ($list[$i] as $key => $value) {
        echo "<td>". $value ."</td>";
    }

    echo "</tr>";
}
echo "</table>";
*/