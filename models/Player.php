<?php

class Player {
    private $id, $userName, $firstName, $lastName, $email, $password, $imagePath, $imageExt; 
    
    function __construct($userName, $firstName, $lastName, $email, $password, $imagePath = "", $imageExt = "", $id = 0) {
        $this->id = $id;
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->imagePath = $imagePath;
        $this->imageExt = $imageExt;
    }
    //ID
    function getId() {return $this->id;}
    function setId($id) {$this->id = $id;}
    //UserName
    function getUserName() {return $this->userName;}
    function setUserName($userName) {$this->userName = $userName;}
    //First Name
    function getFirstName() {return $this->firstName;}
    function setFirstName($firstName) {$this->firstName = $firstName;}
    //Last Name
    function getLastName() {return $this->lastName;}
    function setLastName($lastName) {$this->lastName = $lastName;}
    //Email
    function getEmail() {return $this->email;}
    function setEmail($email) {$this->email = $email;}
    //Password
    function getPassword(){return $this->password;}
    function setPassword($password){$this->password = $password;}
    //Image Path for Profile Picture
    function getImagePath(){return $this->imagePath;}
    function setImagePath($imagePath) {$this->imagePath = $imagePath;}
    //Image Extension for Profile Picture
    function getImageExt() {return $this->imageExt;}
    function setImageExt($imageExt) {$this->imageExt = $imageExt;}



}
