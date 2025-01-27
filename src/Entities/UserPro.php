<?php

final class UserPro
{
    private ?int $id;
    private string $phone;
    private string $company;
    private string $companyAdress;
    private bool $isValidated;


    public function __construct(string $phone, string $company, string $companyAdress, bool $isValidated = false, ?int $id = null)
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

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getIsValidated()
    {
        return $this->isValidated;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getCompanyAdress(): string
    {
        return $this->companyAdress;
    }

    public function setCompanyAdress($companyAdress)
    {
        $this->companyAdress = $companyAdress;
        return $this;
    }
}
