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




// couleur hover <options> des balies <select> (pass sur que ça fonctionne)

function choix(event) {
  var select = event.target; // "select" désigne le menu déroulant sur lequel il y a un chagement... 
  if (select.selectedIndex === 0) return; // si c'est la première option qui est sélectionnée on ne fait rien...       

  var option_selectionnee = select.selectedOptions[0] // ou : select.options[select.selectedIndex]    
  option_selectionnee.selected = false; // déselectionne l'option sélectionnée pour suppriimer la surbrillance par défaut...   

  // Si l'option n'est pas selectionnée (c'est-à-dire si elle n'a pas la class "selectionned") 
  // alors on l'a sélectionne (c'est-à-dire on lui ajoute la class "selectionned")
  // Si l'option est déjà selectionnée (c'est-à-dire si elle a la class "selectionned") 
  // alors on l'a desélectionne (c'est-à-dire on suprime la class "selectionned")
  option_selectionnee.classList.toggle("selectionned");

  // La suite ajoute bêtement à la textarea toutes les options sélectionnées de tous les selects...
  var str = "";
  document.querySelectorAll(".selectionned").forEach(element => {
    str += element.textContent + ",\n";
  });
  document.getElementById("myTextarea").value = str;
}
