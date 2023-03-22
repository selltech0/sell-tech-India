<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Database
{
    private static $dbName = 'id20360984_sell_tech';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'id20360984_selltech';
    private static $dbUserPassword = 'Kt[=mj0N]8[8Q]%y';

    private static $cont = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        if (null === self::$cont) {
            try {
                self::$cont =  new PDO('mysql:host=' . self::$dbHost . '; dbname=' . self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}
