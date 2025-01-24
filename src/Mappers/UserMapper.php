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
 
            // userPro doit etre un objet UserPro composé soit même dans le repository de user, ou null
            $datasUser["userPro"]
        );
    }

}