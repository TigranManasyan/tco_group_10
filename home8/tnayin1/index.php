<?php
$text =strtoupper("Lorem Lorem ipsum dolor sit amet, Lorem  consectetur adipisicing
         elit. Animi corporis dolor ipsam magni nesciunt perferendis
         praesentium sequi sit totam voluptatem? Animi commodi dicta,
         eligendi eveniet ex facere possimus praesentium repellat
         repudiandae sint? Aperiam consequatur eius impedit laboriosam
         libero minima neque porro, quasi rerum veritatis? Cupiditate
         illo praesentium repudiandae soluta sunt.");

$text1 = explode(" ",$text);


asort($text1);
$text2 = array_unique($text1);
foreach ($text2 as $item){
    echo "<pre>";
    echo $item . "<br>";
}



