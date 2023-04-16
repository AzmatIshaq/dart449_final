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
