const notecard = document.querySelector('.pazaakCard');
const emptyColumns = document.querySelectorAll('.emptyColumn');

// Fill listeners
notecard.addEventListener('dragstart', dragStart);
notecard.addEventListener('dragend', dragEnd);




// Loop through empty boxes and add listeners
for (const emptyColumn of emptyColumns) {
  emptyColumn.addEventListener('dragover', dragOver);
  emptyColumn.addEventListener('dragenter', dragEnter);
  emptyColumn.addEventListener('dragleave', dragLeave);
  emptyColumn.addEventListener('drop', dragDrop);
}


// Drag Functions
function dragStart() {
  this.className += ' columnWhileHeld';
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
  this.className += ' columnWhileHeld';
  console.log('Dragging Entered');
}

function dragLeave() {
  this.className = 'emptyColumn';
  console.log('Dragging Leave');
}

function dragDrop() {
  this.className = 'emptyColumn';
  this.append(notecard);
  console.log('Dragging Dropped');
}


