<?php

class Book {
    private int $id;
    // private int $idSaler;
    private int $isbn;
    private string $title;
    private int $idAuthor;
    private int $parutionAt;
    private string $edition;
    private string $description;
    // private int $price;
    // private int $idImage;

    public function __construct(int $isbn, string $title, int $idAuthor, int $parutionAt, string $edition, string $description, ?int $id = null, ?UserPro $userPro = null)
    {
        
    }


    
}


?>