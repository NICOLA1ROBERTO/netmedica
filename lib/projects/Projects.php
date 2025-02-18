<?php

namespace App\projects;

use Smarty\Smarty;

class Projects
{



    public $id_progetto;


    public function fetchProjects(): array
    {
        //TODO: evitare uso globali, usare approcci alternativi
        global $hot;

        $results = [];

        $query = "SELECT * FROM progetti";

        //TODO: migliorare gestione e controlli
        $ris = mysqli_query($hot, $query);

        while ($lin = mysqli_fetch_assoc($ris)) {

            $results[] = $lin;
        }


        return $results;
    }



    public function visualizza():void
    {


        $array_projects = $this->fetchProjects();
        $tpl = new Smarty();

        $tpl->assign('projects', $array_projects);
        $tpl->display('quadro.tpl');
    }
}