<?php
    $text = strtoupper('Lorem ipsum dolor sit amet, asdas consectetur adipisicing elit. Nihil, officia?');
        $arr = explode(' ', $text);
        echo '<pre>';
        asort($arr);

        foreach ($arr as $key => $value){
            echo "$value" . '<br>';
        }

?>


