<?php

namespace Daw;

class Sessio
{

    public function __construct()
    {
        session_start();
    }

    public function get($id)
    {
        return $_SESSION[$id];
    }

    public function set($id, $value)
    {
        $_SESSION[$id] = $value;
    }
}

?>