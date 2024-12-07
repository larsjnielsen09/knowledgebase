// Animated background shapes
const createShapes = () => {
	const bg = document.querySelector('.animated-bg');
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
};

// Search functionality
const searchBox = document.querySelector('.search-box');
searchBox.addEventListener('keypress', (e) => {
	if (e.key === 'Enter') {
		const searchTerm = searchBox.value.trim();
		if (searchTerm) {
			window.location.href = `https://www.support-and-knowledge-base.com/search?q=${encodeURIComponent(searchTerm)}`;
		}
	}
});

// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();
		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

// Initialize
createShapes();