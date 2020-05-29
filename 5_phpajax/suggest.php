<?php
$people[] = "Mary";
$people[] = "Andy";
$people[] = "Brad";
$people[] = "Anne";
$people[] = "Caroline";
$people[] = "Eveline";
$people[] = "Cakr";
$people[] = "Karel";
$people[] = "Andrea";
$people[] = "Ivana";
$people[] = "Petr";
$people[] = "Tereze";
$people[] = "Ondra";
$people[] = "Lenka";
$people[] = "Okurka";
$people[] = "Banan";
$people[] = "Lucie";
$people[] = "Krusta";
$people[] = "Derek";
$people[] = "Katie";
$people[] = "Jillien";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mike";
$people[] = "Tod";
$people[] = "John";
$people[] = "Drab";
$people[] = "Mary";
$people[] = "Julla";

//get Query String
$q = $_REQUEST['q'];

$suggestion = "";

//Get suggestion
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= "<br> $person";
            }

        }
    }
}
echo $suggestion === "" ? "NO Suggestion" : $suggestion;