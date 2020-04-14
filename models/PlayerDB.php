<?php
class PlayerDB {
 public static function select_all()
    {
        $db = Database::getDB();
 
      $query = 'SELECT * FROM players';
      $statement = $db->prepare($query);
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    public static function compareUserName($userName){
        $db = Database::getDB();
 
      $query = 'SELECT userName FROM players '
              . 'WHERE userName = :userName';
      $statement = $db->prepare($query);
      $statement->bindValue(':userName', $userName );
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    public static function compareEmail($email){
        $db = Database::getDB();
 
      $query = 'SELECT email FROM players '
              . 'WHERE email = :email';
      $statement = $db->prepare($query);
      $statement->bindValue(':email', $email );
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    
    public static function getPasswordHash($userName){
        $db = Database::getDB();
 
      $query = 'SELECT password FROM players '
              . 'WHERE userName = :userName';
      $statement = $db->prepare($query);
      $statement->bindValue(':userName', $userName );
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    
    public static function insertPlayer($firstName, $lastName, $userName, $email, $password){
        $db = Database::getDB();
 
      $query = 'INSERT INTO players (firstName, lastName, userName, email, password)'
              . 'VALUES (:firstName, :lastName, :userName, :email, :password)';
      $statement = $db->prepare($query);
      $statement->bindValue(':firstName', $firstName );
      $statement->bindValue(':lastName', $lastName );
      $statement->bindValue(':userName', $userName );
      $statement->bindValue(':email', $email );
      $statement->bindValue(':password', $password);
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    public static function insertNewPlayer($currentPlayer){
        $db = Database::getDB();
 
      $query = 'INSERT INTO players (firstName, lastName, userName, email, password)'
              . 'VALUES (:firstName, :lastName, :userName, :email, :password)';
      $statement = $db->prepare($query);
      $statement->bindValue(':firstName', $currentPlayer->getFirstName());
      $statement->bindValue(':lastName', $currentPlayer->getLastName() );
      $statement->bindValue(':userName', $currentPlayer->getUserName() );
      $statement->bindValue(':email', $currentPlayer->getEmail() );
      $statement->bindValue(':password', $currentPlayer->getPassword());
      $statement->execute();
      $idNum = $db->lastInsertId(); 
      $statement->closeCursor();
      return $idNum; 
    }
    
    public static function getPlayer($userName){
        $db = Database::getDB();
 
      $query = 'SELECT playerID, firstName, lastName, email, password, imagePath, imageExtension FROM players '
              . 'WHERE userName = :userName';
      $statement = $db->prepare($query);
      $statement->bindValue(':userName', $userName );
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    
    public static function getNewImagePath(){
        // Select Statement taken from https://stackoverflow.com/questions/11680025/how-to-generate-random-number-without-repeat-in-database-using-php
        $db = Database::getDB();
 
      $query = 'SELECT random_num '
              . 'FROM ('
              . 'SELECT FLOOR(RAND() * 99999) AS random_num '
              . 'UNION '
              . 'SELECT FLOOR(RAND() * 99999) AS random_num '
              . ') AS playerPlus1 '
              . 'WHERE random_num NOT IN(SELECT imagePath FROM players WHERE imagePath IS NOT NULL '
              . 'LIMIT 1';
      $statement = $db->prepare($query);
      $statement->execute();
      $result =  $statement->fetch();
      return $result;
    }
    
    public static function checkImagePath($imageNum){
        $db = Database::getDB();
 
      $query = 'SELECT imagePath FROM players '
              . 'WHERE imagePath = :imagePath';
      $statement = $db->prepare($query);
      $statement->bindValue(':imagePath', $imageNum );
      $statement->execute();
      $results =  $statement->fetchAll();
      return $results;
    }
    
    public static function setNewImagePath($currentPlayer){
        $db = Database::getDB();
 
      $query = 'UPDATE players SET imagePath = :imagePath, imageExtension = :imageExtension'
              . ' WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $currentPlayer->getId());
      $statement->bindValue(':imagePath', $currentPlayer->getImagePath());
      $statement->bindValue(':imageExtension', $currentPlayer->getImageExt());
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    
    public static function changeFName($currentPlayer){
        $db = Database::getDB();
 
      $query = 'UPDATE players SET firstName = :firstName'
              . ' WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $currentPlayer->getId());
      $statement->bindValue(':firstName', $currentPlayer->getFirstName());
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    
    public static function changeLName($currentPlayer){
        $db = Database::getDB();
 
      $query = 'UPDATE players SET lastName = :lastName'
              . ' WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $currentPlayer->getId());
      $statement->bindValue(':lastName', $currentPlayer->getLastName());
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    
    public static function changeEmail($currentPlayer){
        $db = Database::getDB();
 
      $query = 'UPDATE players SET email = :email'
              . ' WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $currentPlayer->getId());
      $statement->bindValue(':email', $currentPlayer->getEmail());
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    
    public static function changePassword($currentPlayer){
        $db = Database::getDB();
 
      $query = 'UPDATE players SET password = :password'
              . ' WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $currentPlayer->getId());
      $statement->bindValue(':password', $currentPlayer->getPassword());
      $statement->execute();
      $statement->closeCursor();
      return;
    }
    
    public static function getUserName($playerID){
        $db = Database::getDB();
 
      $query = 'SELECT userName FROM players '
              . 'WHERE playerID = :playerID';
      $statement = $db->prepare($query);
      $statement->bindValue(':playerID', $playerID);
      $statement->execute();
      $result =  $statement->fetch();
      return $result;
    }
}
