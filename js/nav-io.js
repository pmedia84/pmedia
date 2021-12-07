const nav = document.querySelector(".nav-not-scrolled");
const hero = document.querySelector(".hero");

const heroobserveroptions = {
    
    rootMargin: "-300px 0px -300px 0px",
    
};

const heroobserver = new IntersectionObserver(function(entries) {

entries.forEach(entry => {
    
    if(!entry.isIntersecting)
    nav.classList.add("nav-scrolled");
    else {
        nav.classList.remove("nav-scrolled");
        
    }
    });
   
    
    

} ,heroobserveroptions);

heroobserver.observe(hero);

