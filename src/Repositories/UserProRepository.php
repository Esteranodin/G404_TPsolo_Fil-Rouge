<?php

final class UserProRepository extends DatabaseRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function isUserPro(UserPro $userPro)
    // {

    //     $sql = "SELECT * FROM `user_pro` WHERE `isValidated` = true";
    //     $stmt = $this->pdo->prepare($sql);
    //     $stmt->execute();

    //     $userProDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //     $userPro = [];

    //     foreach ($userProDatas as $userProData) {
    //         $userPro[] = UserProMapper::MapToObject($userProData);
    //     }

    //     return $userPro;
    // }


    public function findById(int $idUserPro): ?UserPro
    {
        $sql = "SELECT * FROM `user_pro` WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $idUserPro
        ]);

        $userProData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userProData) {
            return null;
        }

        $userPro = UserProMapper::MapToObject($userProData);

        return $userPro;
    }

    public function createAccountPro(UserPro $userPro): UserPro
    {
        try {
            $sql = "INSERT INTO `user_pro`(`phone`, `company`, `companyAdress`) VALUES (:phone, :company, :companyAdress)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':phone' => $userPro->getPhone(),
                ':company' => $userPro->getCompany(),
                ':companyAdress' => $userPro->getCompanyAdress(),
            ]);

            return $userPro;

        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }
}

    // if($userData['id_user_pro']){
    //     $userData['id_user_pro'] = $this->detailProRepo->findById($userData['id_user_pro']);
    // }

    // return $userData;
