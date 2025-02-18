<?php

namespace App\controllers;


class MainController
{

    public function home() :void
    {


        $obj_controller = new ProjectController();
        $obj_controller->visualizza();
    }



}