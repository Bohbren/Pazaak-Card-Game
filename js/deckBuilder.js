//A variable used to store an incrementing number - which is used for creating unique ids for the generated cards
let cardIdCounter = 0;


$(document).ready(function () {
  //Generates slots for cards to be placed into for deck making
  for (let index = 0; index < 6; index++) {
    $('#boardlists').append("<div id=slot" + index + ' class="emptyCardSlot" ondrop="dropCard(event)" ondragover="allowCardDrop(event)"></div>');
  }
  //Call function that generated sample cards for creating a deck
  createSampleSet();
});

function createSampleSet() {
  //Clears the rows to make a section of newly generated cards
  $(".cardsRow1").html("");
  $(".cardsRow2").html("");
  //Loops through a set number to generate Pazaak cards and add them to divs with set classes 
  for (let index = 1; index < 7; index++) {
    $('.cardsRow1').append("<img class='pazaakCard' value = " + index + " id=card" + cardIdCounter++ + " src=images/cards/plus" + index + ".jpg draggable='true' alt='A positive Pazaak card with the value of " + index + "' ondragstart='dragCardStart(event)' height='120px' width='90px' onClick='checkSlot(event)' />");
    $('.cardsRow2').append("<img class='pazaakCard' value = -" + index + " id=cardNegative" + cardIdCounter++ + " src=images/cards/minus" + -Math.abs(index) + ".jpg draggable='true' alt='A negative Pazaak card with the value of " + index + "' ondragstart='dragCardStart(event)' height='120px' width='90px' onClick='checkSlot(event)' />");
  }
}

//Removes card from slot if clicked to free up the space - or you could just drag over it with another card
function checkSlot(ev) {
  let clickedCard = document.getElementById(ev.target.id)
  let cardsParentElement = clickedCard.parentElement;
  if (cardsParentElement.parentElement === document.getElementById("boardlists")) {
    cardsParentElement.removeChild(clickedCard);
  }
}

function allowCardDrop(ev) {
  ev.preventDefault(); // default is not to allow drop
}

//When you start dragging a card this function activates with the event of dragStart. It grabs the targets id of the card being dragged
function dragCardStart(ev) {
  ev.dataTransfer.setData("text/plain", ev.target.id);
}


function dropCard(ev) {
  ev.preventDefault(); // default is not to allow drop
  let cardId = ev.dataTransfer.getData("text/plain");
  let sourceCardSlot = document.getElementById(cardId);

  createSampleSet();

  // ev.target.id here is the id of target Object of the drop
  let targetElement = document.getElementById(ev.target.id)
  let targetParentElement = targetElement.parentElement;

  //Checks to see if there is an card in the slot. If there is, it will replace it with the new one.
  if (targetElement.className === sourceCardSlot.className) {
    //Removes the current card and replaces it with the new one
    targetParentElement.removeChild(targetElement);
    targetParentElement.appendChild(sourceCardSlot);
  } else {
    // Append to the list
    targetElement.appendChild(sourceCardSlot);
  }
}

//listener for build deck button after cards have been selected to create a deck
document.getElementById("buildDeckBtn").addEventListener("click", function () {

  // if(validateDeck() == false) {
  //   document.getElementById("errorMessage").innerHTML = "test";
  // }
  // else {
  //   document.getElementById("errorMessage").innerHTML = "not true";
  // }


  //Array holding values of the six chosen cards for a deck
  var cardsToBeBuilt = [document.getElementById("slot0").firstChild.getAttribute('value'), document.getElementById("slot1").firstChild.getAttribute('value'),
    document.getElementById("slot2").firstChild.getAttribute('value'), document.getElementById("slot3").firstChild.getAttribute('value'),
    document.getElementById("slot4").firstChild.getAttribute('value'), document.getElementById("slot5").firstChild.getAttribute('value')
  ];

  const fakeImages = document.querySelectorAll("boardlists");
	for (var i = 0; i < fakeImages.length; i++) {
	  console.log('fakeImage: ', fakeImages[i]);
	}

  console.log(cardsToBeBuilt);
});


//Client-side Validation for building a deck - Serverside is done via PHP
function validateDeck() {
  if(emptyCard == true) {
    return true;
  }
  else {
    return false
  }
}