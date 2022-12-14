<?php 
class Address {
    private $streetName;
    private $buildingNumber;
    private $apartmentNumber;
    private $postalCode;
    private $city;
 
    public function __construct(string $streetName, string $buildingNumber,
string $apartmentNumber, string $postalCode, string$city)
    {
        $this->streetName = $streetName;
        $this->buildingNumber = $buildingNumber;
        $this->apartmentNumber = $apartmentNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
   } 
}
 
class Person
{
    /** string */
    private $firstName;
    /** string */
    private $lastName;
 
    /** string */
    private $email;
 
    /** @var Address */
    private $address;
 
    public function __construct(string $firstName, string $lastName, string
$email, Address $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
    }
 
    public function getEmail() : string {
        return $this->email;
    } 
}
 
class EmailValidator
{
    public static function isValid(string $email): bool
    {
        $hasDot = false !== strpos($email, '.');
        $hasAt = false !== strpos($email, '@');
 
        return $hasDot && $hasAt;
        echo $hasDot;
    }
}
