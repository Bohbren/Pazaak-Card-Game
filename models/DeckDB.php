<?php

class DeckDB {

    public static function select_all($player) {
        $db = Database::getDB();

        $query = 'SELECT * FROM playerDecks '
                . 'WHERE playerID = :playerID ';
        $statement = $db->prepare($query);
        $statement->bindValue(':playerID', $player->getId());

        $statement->execute();
        $results = $statement->fetchAll();
        return $results;
    }
    
        public static function insertDeck($player, $deckString) {
        $db = Database::getDB();

        $query = 'INSERT INTO playerdecks(mainDeck, cards) '
                . 'VALUES (false, :deckString)';
        $statement = $db->prepare($query);
        $statement->bindValue(':deckString', $deckString);

        $statement->execute();
    }
}
