const nav = document.getElementById("navbar");
let links = document.querySelectorAll('.nav_link');
console.log(links.length);
const elementoAObservar = document.getElementById("inicio");

function observadorFunction(entries, observadorFunction) {
    entries.forEach(entry => {
        if(!entry.isIntersecting){
            nav.classList.replace("top", "scroll");
            links.forEach(link => {
                link.classList.replace("texto-white", "texto-black");
            })
        }
        else{
            nav.classList.replace("scroll", "top");
            links.forEach(link => {
                link.classList.replace("texto-black", "texto-white");
            })

        }
    });
}
const observadorOptions = {
    rootMargin: "-100px 0px 0px 0px"
};

const observador = new IntersectionObserver(observadorFunction, observadorOptions);

observador.observe(elementoAObservar);

console.log("hola mundo");
