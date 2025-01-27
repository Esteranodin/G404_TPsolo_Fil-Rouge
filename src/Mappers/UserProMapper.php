<?php

class UserProMapper 
{
    public static function mapToObject(array $datasUserPro): UserPro
    {
        return new UserPro (
            $datasUserPro["phone"],
            $datasUserPro["company"],
            $datasUserPro["company_adress"],
            $datasUserPro["is_validated"],
            $datasUserPro["id"]
        );
    }

}