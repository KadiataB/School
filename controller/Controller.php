<?php

class Controller
{

    public function render($nameView, $d=[])
    {
        $data= $d;
        // extract($d);

        require_once "../view/$nameView.html.php";
    }
}