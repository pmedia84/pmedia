
const navbar = document.querySelector(".nav");
const hero = document.querySelector(".indexhero");

const heroobserveroptions = {
    rootMargin: "-500px 0px -500px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, 
    heroobserver) {

entries.forEach(entry => {
    
    if(!entry.isIntersecting)
    home.classList.add("home-scrolled");
    else {
        home.classList.remove("home-scrolled");
        
    }
    if(!entry.isIntersecting)
    navbar.classList.add("nav-scrolled");
    else {
        navbar.classList.remove("nav-scrolled");
        
    }


   
    });
   
    
    

} ,heroobserveroptions);

heroobserver.observe(hero);

