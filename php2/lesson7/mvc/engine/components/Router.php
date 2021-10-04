<?php

namespace engine\components;

class Router
{
    public function getURI() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            echo trim($_SERVER['REQUEST_URI']);
        }
    }
}