<?php

final class UserRepository extends DatabaseRepository
{
    private UserProRepository $userProRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userProRepository = new UserProRepository();
    }

    public function checkMailExist(string $mail): bool
    {
        try {
            $checkSql = "SELECT mail FROM `user` WHERE `mail` = :mail";
            $stmt = $this->pdo->prepare($checkSql);
            $stmt->execute([
                ':mail' => $mail
            ]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Si un utilisateur est trouvé
                return true;
            } else {
                return false;
            }
        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }

    public function createAccount(User $user): int
    {
        try {
            $sql = "INSERT INTO `user`(`mail`, `password`, `lastname`, `firstname`, `id_user_pro`) VALUES (:mail, :mdp, :lastname, :firstname, :idUserPro)";
            // Hashage du mot de passe pour la sécurité
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_BCRYPT));

            $stmt = $this->pdo->prepare($sql);

            if($user->getUserPro() === null){
                $idUserPro = null;
            } else {
                $idUserPro = $user->getUserPro()->getid();
            }

            $stmt->execute([
                ':mail' => $user->getMail(),
                ':mdp' => $user->getPassword(),
                ':lastname' => $user->getLastname(),
                ':firstname' => $user->getFirstname(),
                ':idUserPro' => $idUserPro
            ]);
            // permet de recupérer le dernier id créé
            return $this->pdo->lastInsertId();
        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }

    public function checkPassword($mail, $mdp): false| User
    {
        try {
            $checkSql = "SELECT * FROM `user` WHERE `mail` = :mail";
            $stmt = $this->pdo->prepare($checkSql);
            $stmt->execute([':mail' => $mail]);

            $userToCheck = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($mdp, $userToCheck['password'])) {

                if (!$userToCheck['id_user_pro']) {
                    $userToCheck['userPro'] = null;
                } else {
                    $userPro = $this->userProRepository->findById($userToCheck['id_user_pro']);
                    if (!$userPro) {
                        $userToCheck['userPro'] = null;
                    }

                    $userToCheck['userPro'] = $userPro;
                }
                return UserMapper::mapToObject($userToCheck);
            } else {
                return false;
            }
        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }

    public function modifiedAccount($mail, $userLastname, $userFirstname, $newMdp = null)
    {
        try {
            $sql = "UPDATE `user` SET `lastname`= :lastname, `firstname`= :firstname";

            $userDatas = [
                ':mail' => $mail,
                ':lastname' => $userLastname,
                ':firstname' => $userFirstname
            ];

            // Seulement s'il y a un nouveau mot de passe, il est haché et ajouté à la requête
            if ($newMdp !== null) {
                $mdpHashed = password_hash($newMdp, PASSWORD_BCRYPT);
                $sql .= ", `password` = :password";
                $userDatas[':password'] = $mdpHashed;
            }
            // Concaténation requête
            $sql .= " WHERE `mail` = :mail";

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($userDatas);

        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }
}
