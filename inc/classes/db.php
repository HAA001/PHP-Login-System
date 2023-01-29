<?php

//if there is not constant defined called __config__, do not load this file
if(!defined('__CONFIG__')) {
    exit('You Do Not Have A Config File');
    
    }

class DB {
    protected static $con;

    private function __construct() {
        try {
            self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port3306;dbname=login_course', 'root', '2023Root123' );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
        } catch (PDOException $e) {
            echo "Could not connect to database.";
            exit;
        }
    }

    public static function getConnection() {
        //if this instance has not been started, start it.
        if (!self::$con) {
            new DB();
        }
        //Return the writeable db connection
        return self::$con;
    }
}









?>