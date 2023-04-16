// Javascript object to manage game character details

// Character details
const character1 = {
  name: 'Mosley Ferret',
  nationality: 'Canadian',
  province: 'Québec',
  city: 'Beaconsfield',
  age: 28,
  sex: 'male',
  education: 'Sociology Degree - NYU',
  spouse: 'N/A',
  interests: ['music', 'activism', 'reading', 'travel' ],
  fileNotes: 'Recent file note: Location data indicates individual attends music festivals as well as political events regularly. -January 4 2023'
};

const character1Info = `Mosley Ferret is ${character1.nationality}. He lives in the city of ${character1.city} in ${character1.province}. His interests include ${character1.interests[0]}, ${character1.interests[1]}, ${character1.interests[2]}, ${character1.interests[3]}`;




// Limit code execution to a specific page
if (window.location.href.indexOf('tasks.php') > -1) {
// Typewriter effect

// let i = 0;
// let txt = `Target travelled to area of interest. Read individual details, update file notes and complete evaluation.\n\n${character1Info}`;
// let speed = 0;
//
// function typeWriter() {
//   if (i < txt.length) {
//     document.getElementById("avatar-text").innerHTML += txt.charAt(i);
//     i++;
//     setTimeout(typeWriter, speed);
//   }
// }
//
//
//
//
// typeWriter();

}

/******************** Eval Progress Bar ****************************/
// Loading bar created with ChatGPT


function startProgress() {
  let progressBar = document.querySelector('.progress-bar');
  let progressText = document.querySelector('.progress-text');
  let width = 0;
  let intervalId = setInterval(frame, 50);

  function frame() {
    if (width >= 100) {
      clearInterval(intervalId);
      progressText.textContent = "COMPLETE";
    } else {
      width++;
      progressBar.style.width = width + '%';
      progressText.textContent = width + '%';
    }
  }
}


// Overlay Effect task card 1
if (window.location.href.indexOf('tasks.php') > -1) {

const openButton = document.getElementById('open-overlay');
const overlay = document.querySelector('.overlay');
const closeButton = document.getElementById('close-overlay');
const overlayContent = document.querySelector('.overlay-content');

openButton.addEventListener('click', function() {
  overlay.style.display = 'block';
  overlayContent.style.display = 'block';
});

closeButton.addEventListener('click', function() {
  overlay.style.display = 'none';
  overlayContent.style.display = 'none';
});

}


// Display text based on user input
function displayText() {
  const input = document.getElementById("userInput").value;
  document.getElementById("output").innerHTML = input;
}



if (window.location.href.indexOf('training.php') > -1) {
// Draggable effets for training page

// select the parent div element
let parentDragL = document.querySelector('.training-variables-left');
let parentDragR = document.querySelector('.training-variables-right');

// get all child elements of the parent div
let childrenL = parentDragL.children;
let childrenR = parentDragR.children;

// loop through all the child elements and add a class
for (let i = 0; i < childrenL.length; i++) {
  childrenL[i].classList.add('.training-drag');
}

// loop through all the child elements and add a class
for (let i = 0; i < childrenR.length; i++) {
  childrenR[i].classList.add('.training-drag');
}

$( ".training-drag" ).draggable();


}


/***************************** 5 ******************************************/

// Exercise 5 Javascript

// Boolean to manage bar state
let barStart = false;

// Variables to track dropped text and dropped container
let droppedText;
let droppedContainer;

// Track the amount of objects that drop onto an object
let dropCount = 0;

// Array to track user combinations
let userCombos = [];

/******************** Typewriter effect ****************************/

let i = 0;
let txt
let speed = 25;

function typeWriter() {

  txt = `Privacy mosaic analysis indicates individual is in good standing. Health details regarding sleep have been stored in database for future reference. `;


  if (i < txt.length) {
    // $("training-analysis-text").append('hello');
    document.getElementById("training-analysis-text").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}



/******************** Eval Progress Bar ****************************/
// Loading bar created with ChatGPT

function startProgress() {
  if (barStart === false && dropCount === 4) {

$( ".training-drag" ).hidden();

  barStart = true;
  let progressBar = document.querySelector('.progress-bar');
  let progressText = document.querySelector('.progress-text');
  let width = 0;
  let intervalId = setInterval(frame, 10);

  function frame() {
    if (width >= 100) {
      clearInterval(intervalId);
      progressText.textContent = "COMPLETE";
      typeWriter();

    } else {
      width++;
      progressBar.style.width = width + '%';
      progressText.textContent = width + '%';
      }
    }
  }

}

/******************** Drag and drop effects ****************************/

// Drag effect
$( ".training-drag" ).draggable({
  // Make dragged item on top when being dragged
   stack: "body"
   });

// Drop effect
$( ".droppable" ).droppable({
  drop: function( event, ui ) {
    // Hide element once its been dropped.
    ui.draggable.addClass('shrink-and-disappear');
    // Retrieve the text content of the draggable element
    droppedText = ui.draggable.text();
    droppedContainer = $(this).text();
    console.log(droppedText);
    console.log(droppedContainer);
    dropCount++;

    // Push the user decisions into an array
    userCombos.push(droppedText);
    userCombos.push(droppedContainer);
    console.log(userCombos);
  }
});
