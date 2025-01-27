<?php

class UserMapper 
{
    public static function mapToObject(array $datasUser): User
    {
        return new User(
            $datasUser["mail"],
            $datasUser["password"],
            $datasUser["lastname"],
            $datasUser["firstname"],
            $datasUser["id"],
            // userPro = objet composé soit dans le même repository de user, soit null
            $datasUser["userPro"]
        );
    }

}