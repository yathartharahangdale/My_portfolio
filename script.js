document.addEventListener('DOMContentLoaded', () => {

    // --- Mobile Navigation (Hamburger Menu) ---
    const hamburger = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.navbar');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Close menu when a link is clicked
    document.querySelectorAll('.navbar a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });


    // --- Dynamic Typing Effect ---
    const typingElement = document.querySelector('.typing');
    const words = ["Web Developer", "App Developer", "Programmer", "Designer", "Freelancer"];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        // Guard clause: If the element doesn't exist, stop the function.
        if (!typingElement) return; 

        const currentWord = words[wordIndex];
        const typeSpeed = isDeleting ? 75 : 150;

        // If deleting, remove a character. Otherwise, add a character.
        if (isDeleting) {
            typingElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
        }

        // When word is fully typed
        if (!isDeleting && charIndex === currentWord.length) {
            // Wait 1 second before starting to delete
            setTimeout(() => {
                isDeleting = true;
                type();
            }, 1000); 
            return; // Stop this execution
        } 
        // When word is fully deleted
        else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length; // Move to the next word
            // Wait before typing new word
            setTimeout(type, 500);
            return; // Stop this execution
        } 
        
        // Continue typing/deleting
        setTimeout(type, typeSpeed);
    }

    // Start the typing effect
    type();
});
