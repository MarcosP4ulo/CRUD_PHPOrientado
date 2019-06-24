<?php
    require_once 'BD.php';

    class DB
    {
        private static $instance; //variavel

        public static function getInstance(){//função
            if (!isset(self::$instance)) {//como a instancia esta estatic eu a chamo como self
                try{
                    self::$instance= new PDO('mysql:host=' . HOST . '; dbname='. BASE, USER, .PASS);

                    self::$instance-->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    self::$instance-->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            }
        }
    }
    