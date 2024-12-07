// Animated background shapes
const createShapes = () => {
    const bg = document.querySelector('.animated-bg');
    const shapes = bg.querySelectorAll('.animated-shape');
    
    shapes.forEach(shape => {
        const duration = Math.random() * 3 + 2; // Random duration between 2-5s
        const delay = Math.random() * 2; // Random delay between 0-2s
        
        shape.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
    });
};

// Initialize animations
document.addEventListener('DOMContentLoaded', () => {
    createShapes();
});

// Search functionality
const searchBox = document.querySelector('.search-box');
if (searchBox) {
    searchBox.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            const query = searchBox.value.trim();
            if (query) {
                // Redirect to search results page
                window.location.href = `/search?q=${encodeURIComponent(query)}`;
            }
        }
    });
}
