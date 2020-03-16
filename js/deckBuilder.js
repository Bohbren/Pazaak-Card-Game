const pazaakCard = document.querySelector('.pazaakCard');
const emptyCardSlot = document.querySelectorAll('.emptyCardslot');

// Fill listeners
pazaakCard.addEventListener('dragstart', dragStart);
pazaakCard.addEventListener('dragend', dragEnd);




// Loop through empty boxes and add listeners
for (const emptyCardSlot of emptyCardSlots) {
  emptyCardSlot.addEventListener('dragover', dragOver);
  emptyCardSlot.addEventListener('dragenter', dragEnter);
  emptyCardSlot.addEventListener('dragleave', dragLeave);
  emptyCardSlot.addEventListener('drop', dragDrop);
}


// Drag Functions
function dragStart() {
  this.className += ' slotWhileHeld';
  //Stops item from being fully invisible until you drag it where you want it.
  setTimeout(() => (this.className = 'invisible'), 0);
  console.log('Dragging has started');
}

function dragEnd() {
  this.className = 'pazaakCard';
  console.log('Dragging Ended');
}

function dragOver(e) {
  e.preventDefault();
  console.log('Dragging Over');
}

function dragEnter(e) {
  e.preventDefault();
  this.className += ' emptyCardSlot';
  console.log('Dragging Entered');
}

function dragLeave() {
  this.className = 'emptyCardSlot';
  console.log('Dragging Leave');
}

function dragDrop() {
  this.className = 'emptyCardSlot';
  this.append(notecard);
  console.log('Dragging Dropped');
}


