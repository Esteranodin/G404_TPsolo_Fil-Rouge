<?php

final class BookRepository extends DatabaseRepository
{
    public function __construct()
    {
        parent::__construct();
    }


    public function createBook(Book $book) : int
    {
        try {
            $sql = "INSERT INTO `book`(`title`, `id_author`, `parutionAt`, `publisher`, `resum`) VALUES (:title, :idAuthor, :parutionAt, :publisher, :resum)"; 

            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':title' => $book->getTitle(),
                ':idAuthor' => $book->getIdAuthor(),
                ':parutionAt' => $book->getParutionAt(),
                ':publisher' => $book->getPublisher(),
                ':resum' => $book->getResum(),
            ]);

            // permet de recupérer le dernier id créé
            return $this->pdo->lastInsertId();
        } catch (PDOException $error) {
            echo "Erreur lors de la requête : " . $error->getMessage();
            exit;
        }
    }
}
