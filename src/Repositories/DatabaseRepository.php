<?php


abstract class DatabaseRepository
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getlogin();
    }
}