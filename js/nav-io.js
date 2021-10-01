const nav = document.querySelector(".nav");
const hero = document.querySelector(".hero");

const heroobserveroptions = {
    
    rootMargin: "-500px 0px -500px 0px",
    
};

const heroobserver = new IntersectionObserver(function(entries) {

entries.forEach(entry => {
    
    if(!entry.isIntersecting)
    hero.classList.add("nav-scrolled");
    else {
        hero.classList.remove("scrolled");
        
    }
    });
   
    
    

} ,heroobserveroptions);

heroobserver.observe(hero);

