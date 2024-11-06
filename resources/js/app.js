import './bootstrap';
console.log("huh")


// app.js

//
window.startButton = function(button) {
    wrapperToTop()
    button.style.transform = 'scale(0.65)'; 
    setTimeout(() => {
        button.style.transform = 'scale(0.7)'; 
    }, 100);
    
    const wrapper = document.getElementById('wrapper')
    wrapper.classList.toggle("!overflow-y-hidden")
    
    const jumbotron = document.getElementById('jumbo-content')
    jumbotron.classList.toggle("opacity-0")
    jumbotron.classList.toggle("!-translate-y-96")
    
    const quizz = document.getElementById('quizz')
    quizz.classList.toggle("!hidden")    
    setTimeout(() => {
        quizz.classList.toggle("opacity-0")    
    }, 50);
    
    const welcome_banner = document.getElementById('welcome-banner')
    welcome_banner.classList.toggle("scale-[3.5]")    
    // setTimeout(() => {
    //     // welcome_banner.classList.add("floating-animation")    
    // },);

    console.log("End")
};


function wrapperToTop(){
    const container = document.getElementById('wrapper');
    container.scrollTo({
        top: 0,
        behavior: 'smooth' // Smooth scroll effect
    });
}
