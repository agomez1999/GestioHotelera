<?php

namespace Emeset;

class Peticio
{
    public function __construct()
    {
        session_start();
    }

    public function get($input, $id, $filtre = FILTER_SANITIZE_STRING, $opcions = 0)
    {
        $result = false;
        if ($input === 'SESSION') {
            $result = $_SESSION[$id];
        } elseif ($input === 'FILES') {
            $result = $_FILES[$id];
        } else {
            $result = filter_input($input, $id, $filtre, $opcions);
        }
        return $result;
    }

    public function getRaw($input, $id, $opcions = 0)
    {
        return $this->get($input, $id, FILTER_DEFAULT, $opcions);
    }
}