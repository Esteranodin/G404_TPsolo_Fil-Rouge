<?php

class UserProMapper 
{
    public static function mapToObject(array $datasUserPro): UserPro
    {
        return new UserPro (
            $datasUserPro["phone"],
            $datasUserPro["company"],
            $datasUserPro["companyAdress"],
            $datasUserPro["isValidated"],
            $datasUserPro["id"]
        );
    }

}