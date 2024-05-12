<?php

namespace src\app\Entity\Models;

use DateTime;

class User {
    //Attributs correpondant aux champs de la BDD tltleave
    private int $employeeId;
    private string $userName;
    private string $firstname;
    private ?DateTime $birthDate;
    private ?string $situation;
    private ?string $childs;
    private ?string $gender;
    private ?string $userAddress;
    private ?string $zipCode;
    private ?string $city;
    private ?string $country;
    private ?string $phone;
    private string $mail;
    private string $userProfile;
    private ?string $userRole;
    private ?string $employmentStatus; #Statut de l'emploi
    private ?DateTime $hiredDate;
    private string $userPassword;
    private int $adminId;
    private int $teamId;

    //Constructor
    public function __construct(
        $employeeId,
        $userName,
        $firstname,
        $birthDate,
        $situation,
        $childs,
        $gender,
        $userAddress,
        $zipCode,
        $city,
        $country,
        $phone,
        $mail,
        $userProfile,
        $userRole,
        $employmentStatus,
        $hiredDate,
        $userPassword,
        $adminId,
        $teamId
    ) {
        $this->setEmployeeId($employeeId);
        $this->setUserName($userName);
        $this->setFirstname($firstname);
        $this->setBirthDate($birthDate);
        $this->setSituation($situation);
        $this->setChilds($childs);
        $this->setGender($gender);
        $this->setUserAddress($userAddress);
        $this->setZipCode($zipCode);
        $this->setCity($city);
        $this->setCountry($country);
        $this->setPhone($phone);
        $this->setMail($mail);
        $this->setUserProfile($userProfile);
        $this->setUserRole($userRole);
        $this->setEmploymentStatus($employmentStatus);
        $this->setHiredDate($hiredDate);
        $this->setUserPassword($userPassword);
        $this->setAdminId($adminId);
        $this->setTeamId($teamId);
    }

    /**
     * @return int
     */
    public function getEmployeeId(): int {
        return $this->employeeId;
    }

    /**
     * @param int $employeeId
     */
    public function setEmployeeId(int $employeeId): void {
        $this->employeeId = $employeeId;
    }

    /**
     * @return string
     */
    public function getUserName(): string {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getFirstname(): string {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate(): ?DateTime {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     */
    public function setBirthDate(?DateTime $birthDate): void {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getSituation(): ?string {
        return $this->situation;
    }

    /**
     * @param int $situation
     */
    public function setSituation(?string $situation): void {
        $this->situation = $situation;
    }

    /**
     * @return string
     */
    public function getChilds(): ?string {
        return $this->childs;
    }

    /**
     * @param string $childs
     */
    public function setChilds(?string $childs): void {
        $this->childs = $childs;
    }

    /**
     * @return string
     */
    public function getGender(): ?string {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(?string $gender): void {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getUserAddress(): ?string {
        return $this->userAddress;
    }

    /**
     * @param string $userAddress
     */
    public function setUserAddress(?string $userAddress): void {
        $this->userAddress = $userAddress;
    }

    /**
     * @return string
     */
    public function getZipCode(): ?string {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     */
    public function setZipCode(?string $zipCode): void {
        $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): ?string {
        return $this->city;
    }


    /**
     * @param string $city
     */
    public function setCity(?string $city): void {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry(?string $country): void {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getMail(): string {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail(string $mail): void {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getUserProfile(): string {
        return $this->userProfile;
    }

    /**
     * @param int $userProfile
     */
    public function setUserProfile(string $userProfile): void {
        $this->userProfile = $userProfile;
    }

    /**
     * @return string
     */
    public function getUserRole(): ?string {
        return $this->userRole;
    }

    /**
     * @param string $userRole
     */
    public function setUserRole(?string $userRole): void {
        $this->userRole = $userRole;
    }

    /**
     * @return string
     */
    public function getEmploymentStatus(): ?string {
        return $this->employmentStatus;
    }

    /**
     * @param string $employementStatus
     */
    public function setEmploymentStatus(?string $employmentStatus): void {
        $this->employmentStatus = $employmentStatus;
    }

    /**
     * @return DateTime
     */
    public function getHiredDate(): ?DateTime {
        return $this->hiredDate;
    }

    /**
     * @param DateTime $hiredDate
     */
    public function setHiredDate(?DateTime $hiredDate): void {
        $this->hiredDate = $hiredDate;
    }

    /**
     * @return string
     */
    public function getUserPassword(): string {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     */
    public function setUserPassword(string $userPassword): void {
        $this->userPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        /* Hachage du mot de passe :
        Dans la méthode setPassword(), vous utilisez password_hash() pour hacher le mot de passe. 
        C'est une bonne pratique pour sécuriser les mots de passe. Cependant, 
        assurez-vous que lors de la vérification du mot de passe (par exemple, lors de la connexion de l'utilisateur), 
        vous utilisez password_verify() pour comparer le mot de passe haché avec le mot de passe fourni.*/
    }

    /**
     * @return int
     */
    public function getAdminId(): int {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(int $adminId): void {
        $this->adminId = $adminId;
    }

    /**
     * @return int
     */
    public function getTeamId(): int {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     */
    public function setTeamId(int $teamId): void {
        $this->teamId = $teamId;
    }

}