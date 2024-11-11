const quizz = document.getElementById('quizz')
quizz.style.display = 'none';  
quizz.style.opacity = '0'; 
// DEsign samph nga jelas sialan tiap kali ditekan next malah ngilang 
import './bootstrap';
console.log("huh")


// app.js

//

document.addEventListener("DOMContentLoaded", function() {
    
    const startButton = document.getElementById("startButton");  // Replace with the actual button ID

    startButton.addEventListener("click", function() {
        wrapperToTop().then(() => {
            toggleQuiz(startButton);
        });
    });
    
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
        
        quizz.style.display = 'flex';  
        setTimeout(() => {
            quizz.style.opacity = '1'; 
            // quizz.classList.remove("opacity-0")
        }, 50);
        
        const welcome_banner = document.getElementById('welcome-banner')
        welcome_banner.classList.toggle("scale-[3.5]")
    }
});