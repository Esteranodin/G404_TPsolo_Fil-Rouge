<?php

final class UserPro
{
    private ?int $id;
    private string $phone;
    private string $company;
    private string $companyAdress;
    private bool $isValidated;


    public function __construct(string $phone, string $company, string $companyAdress, bool $isValidated, ?int $id = null)
    {
        $this->id = $id;
        $this->phone = $phone;
        $this->company = $company;
        $this->companyAdress = $companyAdress;
        $this->isValidated = $isValidated;
    }

    // Geter & Seter

    public function getId()
    {
        return $this->id;
    }

    public function getIsValidated()
    {
        return $this->isValidated;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getCompanyAdress(): string
    {
        return $this->companyAdress;
    }
}
