import './bootstrap';
console.log("huh")


// app.js

//

document.addEventListener("DOMContentLoaded", function() {
    window.startButton = function(button) {
        wrapperToTop().then(() => {
            toggleQuiz(button);  // This will run only after the scroll is complete
        });
    };
    
    function wrapperToTop() {
        return new Promise((resolve) => {
            const container = document.getElementById('wrapper');
            
            // Start the smooth scroll to the top
            container.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
    
            // Check the scroll position every 50ms until it reaches 0
            const checkIfScrolledToTop = setInterval(() => {
                if (container.scrollTop === 0) {
                    clearInterval(checkIfScrolledToTop);  // Stop checking once scrollTop is 0
                    resolve();  // Resolve the Promise
                }
            }, 10);
        });
    }
    
    
    function toggleQuiz(button){
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
    }
});