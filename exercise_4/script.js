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





// Typewriter effect

let i = 0;
let txt = `Target travelled to area of interest. Read individual details, update file notes and complete evaluation.\n\n${character1Info}`;
let speed = 0;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("avatar-text").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
