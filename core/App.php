<?php

namespace Core;

abstract class App
{
    public static function start(){
        session_start();
    }

    public static function stop(){
        Db::killConnexion();
    }
}