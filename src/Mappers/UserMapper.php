<?php

class UserMapper 
{
    public static function mapToObject(array $datasUser): User
    {
        return new User(
            // $datasUser["id"],
            $datasUser["mail"],
            $datasUser["password"],
            $datasUser["lastname"],
            $datasUser["firstname"],
        );
    }

}