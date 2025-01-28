<?php

class Book
{
    private int $id;
    // private int $idSaler;
    // private int $isbn;
    private string $title;
    private int $idAuthor;
    private int $parutionAt;
    private string $publisher;
    private string $resum;
    // private int $price;
    // private int $idImage;

    public function __construct(string $title, int $idAuthor, int $parutionAt, string $publisher, string $resum)
    {
        $this->title = $title;
        $this->idAuthor = $idAuthor;
        $this->parutionAt = $parutionAt;
        $this->publisher = $publisher;
        $this->resum = $resum;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIdAuthor()
    {
        return $this->idAuthor;
    }

    public function getParutionAt()
    {
        return $this->parutionAt;
    }

    public function getpublisher()
    {
        return $this->publisher;
    }

    public function getResum()
    {
        return $this->resum;
    }
}
