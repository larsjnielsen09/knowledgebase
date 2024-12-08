// Wait for the DOM to be fully loaded before running any code
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all our main functionality
    initializeHeader();
    initializeAnimatedBackground();
    initializeSearchBox();
    initializeSmoothScroll();
    initializeHamburgerMenu();
    initializeContactForm();
});

// Header scroll effect functionality
function initializeHeader() {
    // Get the header element once and store it
    const header = document.querySelector('.header');
    
    // Make sure we found the header before adding scroll listener
    if (header) {
        // Add scroll event listener to window
        window.addEventListener('scroll', function() {
            // Check if we've scrolled at all
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
}

// Animated background shapes functionality
function initializeAnimatedBackground() {
    const bg = document.querySelector('.animated-bg');
    // Only proceed if we found the animated background element
    if (bg) {
        for (let i = 0; i < 5; i++) {
            const shape = document.createElement('div');
            shape.classList.add('animated-shape');
            const size = Math.random() * 100 + 50;
            shape.style.width = size + 'px';
            shape.style.height = size + 'px';
            shape.style.top = Math.random() * 100 + '%';
            shape.style.left = Math.random() * 100 + '%';
            shape.style.animationDuration = (Math.random() * 20 + 10) + 's';
            shape.style.animationDelay = (Math.random() * 2) + 's';
            bg.appendChild(shape);
        }
    }
}

// Search box functionality
function initializeSearchBox() {
    const searchBox = document.querySelector('.search-box');
    if (searchBox) {
        searchBox.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = searchBox.value.trim();
                if (searchTerm) {
                    window.location.href = `https://www.support-and-knowledge-base.com/search?q=${encodeURIComponent(searchTerm)}`;
                }
            }
        });
    }
}

// Smooth scroll functionality for navigation
function initializeSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const element = document.querySelector(this.getAttribute('href'));
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Hamburger menu functionality
function initializeHamburgerMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('show');
        });
    }
}

// Contact form functionality
function initializeContactForm() {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get success message element
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'block';
                
                // Clear the form
                this.reset();
                
                // Hide the success message after 5 seconds
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 5000);
            }
        });
    }
}