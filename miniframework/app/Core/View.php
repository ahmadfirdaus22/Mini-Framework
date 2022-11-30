<?php

namespace OOP\app\Core;


class View
{
    public static function render(string $view, $data)
    {
        require __DIR__.'/../View/header.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/footer.php';
    }
}