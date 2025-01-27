<?php

final class UserProRepository extends DatabaseRepository
{
    public function __construct()
    {
        parent::__construct();
    }

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

    public function createAccountPro(UserPro $userPro): int
    {
        try {
            $sql = "INSERT INTO `user_pro`(`phone`, `company`, `companyAdress`) VALUES (:phone, :company, :companyAdress)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':phone' => $userPro->getPhone(),
                ':company' => $userPro->getCompany(),
                ':companyAdress' => $userPro->getCompanyAdress(),
            ]);

            return $this->pdo->lastInsertId();

        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }
}
