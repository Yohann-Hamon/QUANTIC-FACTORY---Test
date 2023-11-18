const fontaineButton = document.querySelector('.fontaine-button');
const activitesEquipementButton = document.querySelector('.activites-equipement-button');
const espacesVertsButton = document.querySelector('.espaces-verts-button');
const fontaineFrame = document.querySelector('.iframe-f');
const activitesEquipementFrame = document.querySelector('.iframe-a-e');
const espacesVertsFrame = document.querySelector('.iframe-e-v');
const windowFontaine = document.querySelector('.window-fontaine');
const windowActivitesEquipement = document.querySelector('.window-activites-equipement');
const windowEspacesVerts = document.querySelector('.window-espaces-verts');

const selectCommune = document.getElementById('select-commune');
const hiddenF = document.querySelector('.hidden-f');
console.log(hiddenF)

selectCommune.addEventListener('change', () => {
    hiddenF.value = selectCommune.value
    console.log(hiddenF.value)
});


fontaineButton.addEventListener('click', () => {
    windowFontaine.style.display = 'flex';
    windowActivitesEquipement.style.display = 'none';
    windowEspacesVerts.style.display = 'none';
    fontaineFrame.style.display = 'block';
    activitesEquipementFrame.style.display = 'none';
    espacesVertsFrame.style.display = 'none';
});

activitesEquipementButton.addEventListener('click', () => {
    windowFontaine.style.display = 'none';
    windowActivitesEquipement.style.display = 'flex';
    windowEspacesVerts.style.display = 'none';
    fontaineFrame.style.display = 'none';
    activitesEquipementFrame.style.display = 'block';
    espacesVertsFrame.style.display = 'none';
});
  
espacesVertsButton.addEventListener('click', () => {
    windowFontaine.style.display = 'none';
    windowActivitesEquipement.style.display = 'none';
    windowEspacesVerts.style.display = 'flex';
    fontaineFrame.style.display = 'none';
    activitesEquipementFrame.style.display = 'none';
    espacesVertsFrame.style.display = 'block';
});

// fetch('./data/fontaines.json')
//     .then(response => {
//       return response.json();
//     })
//     .then(jsonFontaine => console.log(jsonFontaine));

// const url = "./data/fontaines.json";

// const fetchData = async () => {
//   const response = await fetch(url);
//   const fontaineData = await response.json();
//   return fontaineData;
// };

// const fontaineData = fetchData();

// console.log(fontaineData)


// const fontaines = window.fontaines;
// const selectCommune = document.getElementById('select-commune');

// const jsonFontaine = require('data/fontaines.json');
// console.log(jsonFontaine)

// selectCommune.addEventListener('change', function() {

//     const communeSelectionnee = selectCommune.value;
//     console.log(selectCommune.value)

//     console.log(fontaineData.results)

//     const fontainesParCommune = [
//         fontaineData.filter(fontaine => fontaine.commune === communeSelectionnee)
//     ];

//     const listeFontaines = document.querySelector('ul');
//     listeFontaines.innerHTML = '';
//     fontainesParCommune.forEach(fontaine => {
//         listeFontaines.innerHTML += `
//             <li>${fontaine.voie}</li>
//         `;
//     });
// });