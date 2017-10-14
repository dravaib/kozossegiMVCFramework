<?php
namespace App;

class Services
{

    private $controller;

    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }
}