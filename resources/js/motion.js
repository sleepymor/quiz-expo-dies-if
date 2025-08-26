import { animate } from "motion";

document.addEventListener('DOMContentLoaded', function() {
    const introOverlay = document.getElementById('intro-overlay');
    const introText = document.getElementById('intro-text');

    // Animasi untuk teks "WELCOME" di overlay
    animate(
        introText,
        { opacity: [0, 1], y: [20, 0] },
        { duration: 0.5, easing: "ease-out" }
    ).finished.then(() => {
        // Setelah teks intro muncul, animasikan swipe ke atas cover
        animate(
            introOverlay,
            { y: [0, -window.innerHeight], borderRadius: ['0%', '25%'] },
            { duration: 0.8, delay: 0.1, easing: "ease-in-out" }
        ).finished.then(() => {
            introOverlay.style.display = 'none';
        });
    });

});
