// When the user clicks on div, open the popup
function openPopup(idelement) {
  var popup = document.getElementById(idelement).nextElementSibling;
  popup.classList.toggle("show");
}

document.onclick = (event) => {
  var click_popup = document.querySelector('[id ^= "toggle-popup-"]');
  // var child_click_popup = document.getElementById("toggle-popup").children;
  var popup = document.querySelector('[id ^= "toggle-popup-"]').nextElementSibling;
  if((click_popup != event.target) && (popup.classList.contains("show"))){
    // for(var i=0; i<child_click_popup.length; i++){
    //   if(child_click_popup[i] != event.target){
        popup.classList.remove("show");
    //   }
    // }
  }
  
}

function openCommentBlocs(idelement) {
  var toggle = document.getElementsByClassName(idelement);
  for(var i=0; i<toggle.length; i++){
    toggle[i].classList.add("show-actions");
  }
}