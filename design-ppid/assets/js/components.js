// Load Header and Footer components
document.addEventListener("DOMContentLoaded", function() {
    // Determine the base path based on current location to support nested pages if any
    const basePath = window.location.pathname.includes('/pages/') ? '../' : './';
    
    // Load Header
    const headerContainer = document.getElementById('header-placeholder');
    if (headerContainer) {
        fetch(basePath + 'components/header.html')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(data => {
                headerContainer.innerHTML = data;
                
                // Highlight active link based on current page
                const currentPage = window.location.pathname.split('/').pop() || 'index.html';
                const navLinks = headerContainer.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && (href === currentPage || (currentPage === '' && href === 'index.html'))) {
                        link.classList.remove('text-slate-500');
                        link.classList.add('text-primary', 'bg-blue-50');
                    }
                });
            })
            .catch(error => {
                console.error('Error loading header:', error);
                // Optional: Fallback for local file:// protocol if fetch fails
                if (window.location.protocol === 'file:') {
                    console.warn('Cannot fetch components locally via file:// protocol. Please use a local web server (e.g. Live Server).');
                }
            });
    }

    // Load Footer
    const footerContainer = document.getElementById('footer-placeholder');
    if (footerContainer) {
        fetch(basePath + 'components/footer.html')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.text();
            })
            .then(data => {
                footerContainer.innerHTML = data;
            })
            .catch(error => {
                console.error('Error loading footer:', error);
            });
    }
});

// Global Navbar scroll effect
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.scrollY > 20) {
            navbar.classList.add('shadow-lg');
            navbar.classList.replace('glass-nav', 'bg-white/95');
            navbar.style.backdropFilter = 'blur(10px)';
        } else {
            navbar.classList.remove('shadow-lg');
            navbar.classList.replace('bg-white/95', 'glass-nav');
            // Remove inline style to restore CSS class backdrop-filter
            navbar.style.backdropFilter = '';
        }
    }
});
