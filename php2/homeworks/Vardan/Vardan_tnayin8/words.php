<?php
$text = $_POST;
$shablon  = '/ /';
$word = preg_match_all($shablon, $text, $matches);
echo '<pre>';
print_r($matches);
