const nav = document.querySelector(".body-not-scrolled");
const navbar = document.querySelector(".nav");
const hero = document.querySelector(".hero");

const heroobserveroptions = {
    rootMargin: "-100px 0px 0px 0px",
};

const heroobserver = new IntersectionObserver(function(entries, 
    heroobserver) {

entries.forEach(entry => {
    
    if(!entry.isIntersecting)
    nav.classList.add("scrolled");
    else {
        nav.classList.remove("scrolled");
        
    }
    if(!entry.isIntersecting)
    navbar.classList.add("nav-scrolled");
    else {
        navbar.classList.remove("nav-scrolled");
        
    }

    });
   
    
    

} ,heroobserveroptions);

heroobserver.observe(hero);

