<?php
// $tekst = "ala
// ma
// kota";
// echo nl2br($tekst);
// $tekst1 = "a";
// $tekst2 ="a";
// echo strcmp($tekst1,$tekst2);
// echo strstr($tekst,"ma");
// echo strpos($tekst,"ma");

// $ile = strlen($tekst);
//     for($i=0;$i<$ile;$i++){
//         if (substr($tekst, $i, 1)== "a"){
//             echo "a";
//         }
//     }

//zadanie1

// $tekst = "przykładowy CIĄG zNaKóW";
// echo strtolower($tekst) , "<br>", strtoupper($tekst),"<br>",ucfirst($tekst),"<br>",ucwords($tekst),"<br>"

//zadanie2

// function Upper(){
//     $tekst = "ciag znakow";
//     $nowe = strtoupper($tekst);
//     return $nowe;
// }
// echo Upper();

//zadanie3

// $tekst = "Tomasz Kudraszow";
// $ile = strlen($tekst);
// $wynik = 0;
//     for($i=0;$i<$ile;$i++){
//         if (substr($tekst, $i, 1)== "o"){
//             $wynik++;
//         }
//     }
// echo $wynik;

//zadanie4

// $tekst = "jestem uczniem ZSE";
// $loc = strpos($tekst,"ZSE");
// echo substr_replace($tekst,"[CENZURA]",$loc,3)

//zadanie6

// $tekst = "Tomasz Kudraszow";
// $parzyste ="";
// $nieparzyste = "";
// for($i=0;$i<strlen($tekst);$i++){
//     if($i%2==0){
//         $parzyste .= substr($tekst,$i, 1);
//     } else {
//         $nieparzyste .= substr($tekst,$i, 1);
//     }

// }
// echo $parzyste, "<br>", $nieparzyste;

//zadanie7

// $tekst = "reverse";
// echo strrev($tekst);

//zadanie9

// $tekst ="dlugi ciag";
// $replaced = "";
// for($i=0;$i<strlen($tekst);$i++){
//     $replaced .= "*";
// }
// echo str_replace($tekst,$replaced,$tekst);

//zadanie10

// $tekst = "elektryk";
// $nowy = strtoupper($tekst);
// $replaced = "";
// for($i=0;$i<strlen($tekst);$i++){
//     if($i!=0){
//         $replaced .= "*";
//     } else {
//         $replaced .= $nowy[0];
//     }
// }
// echo $replaced

//zadanie11

// $tekst = "π (czyt. pi), ludolfina, stała Archimedesa – stosunek obwodu koła (czyli długości okręgu) do długości jego średnicy[1]; stosunek ten jest niezależny od wielkości koła, bowiem wszystkie koła są do siebie podobne. Liczba π nazywana jest czasami stałą Archimedesa w uznaniu zasług Archimedesa z Syrakuz, który jako pierwszy badał własności i znaczenie w matematyce tej liczby; określenie ludolfina pochodzi od Ludolpha van Ceulena, który zyskał sławę, przedstawiając tę liczbę z dokładnością do 35 miejsc po przecinku.";
// $w = '<span style="color:red">-</span>';
// for($i=0;$i<strlen($tekst);$i++){
//     if(substr($tekst, $i, 1)==" "){
//         $tekst = substr_replace($tekst,"-",$i,1);

//     }
// }
// echo $tekst;

//zadanie12

// $tekst = "Tomasz Kudraszow";
// $new = "";
// for($i=0;$i<strlen($tekst);$i++){
//     if($i%2==0){
//         $new .= substr($tekst,$i, 1);
//     } else {
//         $new .= "*";
//     }
// }
// echo $new;

//zadanie5

// $tekst = "Moja szkoła ZSE to tez ELEKTRYK";
// $loc = strpos($tekst,"ZSE");
// $tekst = substr_replace($tekst,"[CENZURA]",$loc,3);
// $loc2 = strpos($tekst,"ELEKTRYK");
// $tekst = substr_replace($tekst,"[CENZURA]",$loc2,8);

// echo $tekst;










?>