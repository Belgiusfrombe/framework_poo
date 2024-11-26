<?php


namespace Core;


abstract class Controller
{
    protected static $_table_name;
    protected static $_record_name;
    protected static $_manager;


    private static function init()
    {
        // Dynamique pour chaque classe fille grâce à `static::`
        static::$_table_name = strtolower(str_replace('Controller', '', basename(str_replace('\\', '/', static::class))));
        static::$_manager = '\\App\\Models\\' . ucfirst(static::$_table_name) . 'Manager';
        static::$_record_name = explode('s', static::$_table_name)[0];
    }


    public static function indexAction()
    {
        static::init();


        // Utilise les propriétés statiques spécifiques à la classe fille
        ${static::$_table_name} = static::$_manager::findAll();


        global $title, $content;
        $title = "All " . static::$_table_name;


        ob_start();
        include '../app/views/' . static::$_table_name . '/index.php';
        $content = ob_get_clean();
    }

    public static function showAction(int $id)
    {
        static::init();


        // Utilise les propriétés statiques spécifiques à la classe fille
        ${static::$_record_name} = static::$_manager::findOneById($id);


        global $title, $content;
        $title = ${static::$_record_name}->name;


        ob_start();
        include '../app/views/' . static::$_table_name . '/show.php';
        $content = ob_get_clean();
    }
}
