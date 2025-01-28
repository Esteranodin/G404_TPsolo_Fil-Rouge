<?php

class UserMapper 
{
    public static function mapToObject(array $datasBook): Book
    {
        return new Book(
            $datasBook["title"],
            $datasBook["idAuthor"],
            $datasBook["parutionAt"],
            $datasBook["publisher"],
            $datasBook["resum"],
        );
    }
}