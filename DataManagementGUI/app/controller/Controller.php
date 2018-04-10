<?php
/**
 * Created by PhpStorm.
 * User: ardwin
 * Date: 10-4-2018
 * Time: 14:40
 */

class Controller
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
}