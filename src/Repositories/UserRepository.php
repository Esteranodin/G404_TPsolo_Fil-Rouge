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

            if ($user->getUserPro() === null) {
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

    public function modifiedAccount(User $user, bool $newMdp = false) : void
    {
        try {

            $sql = "UPDATE user SET lastname = :lastname, firstname = :firstname, password = :mdp WHERE id = :id";

            if ($newMdp) {
                $mdpHashed = password_hash($user->getPassword(), PASSWORD_BCRYPT);
                $user->setPassword($mdpHashed);
            }

            $userDatas = [
                ':id' => $user->getId(),
                ':lastname' => $user->getLastname(),
                ':firstname' => $user->getFirstname(),
                ':mdp' => $user->getPassword()
            ];

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($userDatas);

        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }
}
