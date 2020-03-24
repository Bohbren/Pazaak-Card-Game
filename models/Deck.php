<?php

class Deck {
    private $mainDeck, $cards, $playerID;
    function __construct($mainDeck, $cards, $playerID) {
        $this->mainDeck = $mainDeck;
        $this->cards = $cards;
        $this->playerID = $playerID;
    }
    
    //getMainDeck
    function getMainDeck() {return $this->mainDeck;}
    function setMainDeck($mainDeck) {$this->mainDeck = $mainDeck;}
    //getCards
    function getCards() {return $this->cards;}
    function setCards($cards) {$this->cards = $cards;}
    //getPlayerID
    function getPlayerID() {return $this->playerID;}
    function setPlayerID($playerID) {$this->playerID = $playerID;}

}
