<?php

class Controller
{
    public function view($name)
    {
        $filename = "../app/view/" .$name. "view.php";
        if (file_exists($filename))
        {
            require $filename;
        } else {
            $filename = "../app/view/_404.view.php";
            require $filename;
        }
    }

}
