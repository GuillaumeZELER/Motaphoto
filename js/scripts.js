let popupContact = document.getElementsByClassName('menu-item-9');
let modale = document.getElementById('modale');
let overlay = document.getElementById('overlay');
let placement = document.getElementById('placement');

popupContact[0].addEventListener('click', () => {
    overlay.classList.add('active');
    overlay.classList.remove('inactive');
    modale.classList.remove('inactive');
    modale.classList.add('active');
    placement.classList.remove('inactive');
    placement.classList.add('active');
});

popupContact[1].addEventListener('click', () => {
    overlay.classList.add('active');
    overlay.classList.remove('inactive');
    modale.classList.remove('inactive');
    modale.classList.add('active');
    placement.classList.remove('inactive');
    placement.classList.add('active');
});

overlay.addEventListener('click', () => {
    overlay.classList.remove('active');
    overlay.classList.add('inactive');
    modale.classList.remove('active');
    modale.classList.add('inactive');
    placement.classList.remove('active');
    placement.classList.add('inactive');
});


// --- Bouton contact dans la fiche des photos---

let popupContactFiche = document.getElementsByClassName('bouton-contact');

popupContactFiche[0].addEventListener('click', () => {
  overlay.classList.add('active');
  overlay.classList.remove('inactive');
  modale.classList.remove('inactive');
  modale.classList.add('active');
  placement.classList.remove('inactive');
  placement.classList.add('active');
});



// const inputField = document.querySelector('.chosen-value');
// const dropdown = document.querySelector('.value-list');
// const dropdownArray = [... document.querySelectorAll('li')];

// console.log(typeof dropdownArray)
// dropdown.classList.add('open');
// inputField.focus(); // Demo purposes only
// let valueArray = [];
// dropdownArray.forEach(item => {
//   valueArray.push(item.textContent);
// });

// const closeDropdown = () => {
//   dropdown.classList.remove('open');
// }

// inputField.addEventListener('input', () => {
//   dropdown.classList.add('open');
//   let inputValue = inputField.value.toLowerCase();
//   let valueSubstring;
//   if (inputValue.length > 0) {
//     for (let j = 0; j < valueArray.length; j++) {
//       if (!(inputValue.substring(0, inputValue.length) === valueArray[j].substring(0, inputValue.length).toLowerCase())) {
//         dropdownArray[j].classList.add('closed');
//       } else {
//         dropdownArray[j].classList.remove('closed');
//       }
//     }
//   } else {
//     for (let i = 0; i < dropdownArray.length; i++) {
//       dropdownArray[i].classList.remove('closed');
//     }
//   }
// });

// dropdownArray.forEach(item => {
//   item.addEventListener('click', (evt) => {
//     inputField.value = item.textContent;
//     dropdownArray.forEach(dropdown => {
//       dropdown.classList.add('closed');
//     });
//   });
// })

// inputField.addEventListener('focus', () => {
//    inputField.placeholder = 'Type to filter';
//    dropdown.classList.add('open');
//    dropdownArray.forEach(dropdown => {
//      dropdown.classList.remove('closed');
//    });
// });

// inputField.addEventListener('blur', () => {
//    inputField.placeholder = 'Select state';
//   dropdown.classList.remove('open');
// });

// document.addEventListener('click', (evt) => {
//   const isDropdown = dropdown.contains(evt.target);
//   const isInput = inputField.contains(evt.target);
//   if (!isDropdown && !isInput) {
//     dropdown.classList.remove('open');
//   }
// });


//remplissage du formulaire avec la référence

  var champSaisie = document.getElementsByClassName('nf-ref');

  function passerRef(arg){
    champSaisie[0].value = arg;
  }