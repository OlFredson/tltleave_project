<?php

namespace App\Models\Entity;

use DateTime;

class Users
{
    //Attributs correpondant aux champs de la BDD tltleave
    private int $idEmployee;
    private string $userName;
    private string $firstName;
    private ?DateTime $birthDate;
    private ?string $situation;
    private ?string $childs;
    private ?string $gender;
    private ?string $userAddress;
    private ?string $zipCode;
    private ?string $city;
    private ?string $country;
    private ?string $phone;
    private string $userMail;
    private string $userProfile;
    private ?string $userRole;
    private ?string $employmentStatus;
    private ?DateTime $hiredDate;
    private string $userPassword;

    //Constructor
    public function __construct($userName, $firstName, $userMail, $userProfile, $userPassword)
    {

        $this->setUserName($userName);
        $this->setFirstName($firstName);
        $this->setUserMail($userMail);
        $this->setUserProfile($userProfile);
        $this->setUserPassword($userPassword);

    }

    /**
     * @return int
     */
    public function getIdEmployee(): int
    {
        return $this->idEmployee;
    }

    /**
     * @param int $idEmployee
     */
    public function setIdEmployee(?int $idEmployee): void
    {
        $this->idEmployee = $idEmployee;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate(): ?DateTime
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     */
    public function setBirthDate(?DateTime $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getSituation(): ?string
    {
        return $this->situation;
    }

    /**
     * @param int $situation
     */
    public function setSituation(?string $situation): void
    {
        $this->situation = $situation;
    }

    /**
     * @return string
     */
    public function getChilds(): ?string
    {
        return $this->childs;
    }

    /**
     * @param string $childs
     */
    public function setChilds(?string $childs): void
    {
        $this->childs = $childs;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getUserAddress(): ?string
    {
        return $this->userAddress;
    }

    /**
     * @param string $userAddress
     */
    public function setUserAddress(?string $userAddress): void
    {
        $this->userAddress = $userAddress;
    }

    /**
     * @return string
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getUserMail(): string
    {
        return $this->userMail;
    }

    /**
     * @param string $userMail
     */
    public function setUserMail(string $userMail): void
    {
        $this->userMail = $userMail;
    }

    /**
     * @return string
     */
    public function getUserProfile(): string
    {
        return $this->userProfile;
    }

    /**
     * @param int $userProfile
     */
    public function setUserProfile(string $userProfile): void
    {
        $this->userProfile = $userProfile;
    }

    /**
     * @return string
     */
    public function getUserRole(): ?string
    {
        return $this->userRole;
    }

    /**
     * @param string $userRole
     */
    public function setUserRole(?string $userRole): void
    {
        $this->userRole = $userRole;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus(): ?string
    {
        return $this->employmentStatus;
    }

    /**
     * @param string $employementStatus
     */
    public function setEmploymentStatus(?string $employmentStatus): void
    {
        $this->employmentStatus = $employmentStatus;
    }

    /**
     * @return DateTime
     */
    public function getHiredDate(): ?DateTime
    {
        return $this->hiredDate;
    }

    /**
     * @param DateTime $hiredDate
     */
    public function setHiredDate(?DateTime $hiredDate): void
    {
        $this->hiredDate = $hiredDate;
    }

    /**
     * @return string
     */
    public function getUserPassword(): string
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     */
    public function setUserPassword(string $userPassword): void
    {
        $this->userPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        /* Hachage du mot de passe :
        Dans la méthode setPassword(), vous utilisez password_hash() pour hacher le mot de passe. 
        C'est une bonne pratique pour sécuriser les mots de passe. Cependant, 
        assurez-vous que lors de la vérification du mot de passe (par exemple, lors de la connexion de l'utilisateur), 
        vous utilisez password_verify() pour comparer le mot de passe haché avec le mot de passe fourni.*/
    }
}