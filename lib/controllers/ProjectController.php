<?php

namespace App\controllers;

use App\Projects;
class ProjectController
{


    public function visualizza():void
    {




        $obj_project = new Projects\Projects();

        //TODO: migliorare gestione e controlli
        $obj_project->id_progetto = $_GET['id_medico'] ?? null;

        $obj_project->visualizza();


    }



}