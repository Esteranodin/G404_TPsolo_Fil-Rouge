<?php

final class Database
{
    private static ?PDO $pdo = null;

    public static function getlogin(): PDO
    {
        if (self::$pdo === null){
            try {
                $host = "localhost";
                $dbname = "bookmaker_td";
                $login = "root";
                $password = "";

                self::$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $login, $password);
            } catch (PDOException $error) {
                echo "Erreur de login : " . $error->getMessage();
            }
        }

        return self::$pdo;
    }
}