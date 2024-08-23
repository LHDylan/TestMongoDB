<?php

namespace App\View;

class JoView
{
    /**
     * Function used to display all athletes
     * @param object $athletes
     */
    public function index(object $athletes)
    {
        $content = "src/Templates/athlete/athletes.php";
        include "src/Templates/template.php";
    }

    /**
     * Function used to display an error 
     */
    public function error()
    {
        $content = "src/Templates/athlete/error.php";
        include "src/Templates/template.php";
    }

    /**
     * Function used to create an athlete
     */
    public function create()
    {
        $content = "src/Templates/athlete/create.php";
        include "src/Templates/template.php";
    }

    /**
     * Function used to edit an athlete
     * @param object $athlete
     */
    public function edit(object $athlete)
    {
        $content = "src/Templates/athlete/edit.php";
        include "src/Templates/template.php";
    }
}