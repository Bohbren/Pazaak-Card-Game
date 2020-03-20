//A variable used to store an incrementing number - which is used for creating unique ids for the generated cards
let cardIdCounter = 0;


$(document).ready(function () {
  //Generates slots for cards to be placed into for deck making
  for (let index = 0; index < 6; index++) {
    $('#boardlists').append("<div id=slot"+ index +' class="emptyCardSlot" ondrop="dropCard(event)" ondragover="allowCardDrop(event)"></div>');
   }
  //Call function that generated sample cards for creating a deck
  createSampleSet();
});

function createSampleSet() {
  //Clears the rows to make a section of newly generated cards
  $(".cardsRow1").html("");
  $(".cardsRow2").html("");
  //Loops through a set number to generate Pazaak cards
  for (let index = 1; index < 7; index++) {
    $('.cardsRow1').append("<img class='pazaakCard' value = "+index+" id=card" + cardIdCounter++ + " src=images/cards/plus" + index + ".jpg draggable='true' alt='A positive Pazaak card with the value of "+ index +"' ondragstart='dragCardStart(event)' height='120px' width='90px' onClick='checkSlot(event)' />");
    $('.cardsRow2').append("<img class='pazaakCard' value = -"+index+" id=cardNegative" + cardIdCounter++ + " src=images/cards/minus" + -Math.abs(index) + ".jpg draggable='true' alt='A negative Pazaak card with the value of "+ index +"' ondragstart='dragCardStart(event)' height='120px' width='90px' onClick='checkSlot(event)' />");
  }
}

function checkSlot(ev) {
  // alert(ev);

  // ev.dataTransfer.setData("text/plain", ev.target.id)

  // let cardId = ev.dataTransfer.getData("text/plain");
  // let sourceCardSlot = document.getElementById(cardId);


}

function allowCardDrop(ev) {
  console.log("--------------------------------------");
  console.log("We are in allowCardDrop right now...");
  ev.preventDefault(); // default is not to allow drop
  console.log("allowCardDrop ev: " + ev);
}

//When you start dragging a card this function activates with the event of dragStart. It grabs the targets id of the card being dragged
function dragCardStart(ev) {
  console.log("--------------------------------------");
  console.log("We are in dragCardStart right now...");
  ev.dataTransfer.setData("text/plain", ev.target.id);
  console.log("dragCardStop ev.dataTRansfer.setData('text/plain', ev.target.id): " + ev.dataTransfer);
}


function dropCard(ev) {
  console.log("--------------------------------------");
  console.log("We are in drop it right now...");

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