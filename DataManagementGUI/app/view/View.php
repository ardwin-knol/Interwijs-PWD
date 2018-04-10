<?php
/**
 * Created by PhpStorm.
 * User: ardwin
 * Date: 10-4-2018
 * Time: 14:42
 */

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}