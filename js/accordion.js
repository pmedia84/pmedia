var accordion = document.getElementsByClassName("accordion-button");
var i;

for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener("click", function(){
           /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active-accordion");

    /* Toggle between hiding and showing the active panel */

    var accordionpanel = this.nextElementSibling;
    accordionpanel.classList.toggle("active-accordion-panel");
    if (accordionpanel.style.maxHeight) {
        accordionpanel.style.maxHeight = null;
        
    } else {
        accordionpanel.style.maxHeight = accordionpanel.scrollHeight + "px";
        
    }

    });
}