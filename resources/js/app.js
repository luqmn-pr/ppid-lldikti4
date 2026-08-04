// ===================================
// PPID LLDIKTI4 - Main JS
// ===================================

// 1. Navbar Scroll Effect (Glassmorphism → Solid on scroll)
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (navbar) {
        if (window.scrollY > 20) {
            navbar.classList.add('navbar-scrolled');
            navbar.classList.remove('glass-nav');
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.classList.add('glass-nav');
        }
    }
});

// 2. Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Animate hamburger icon
            const icon = mobileMenuBtn.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.className = 'ph-bold ph-list text-2xl';
            } else {
                icon.className = 'ph-bold ph-x text-2xl';
            }
        });
    }

    // 3. Tab Switching (Informasi Publik page)
    window.switchTab = function(tabId) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
        // Reset all tab buttons
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.classList.remove('border-primary', 'bg-primary', 'text-white');
            btn.classList.add('border-transparent', 'bg-slate-100', 'text-slate-500');
            // Reset badge color
            const badge = btn.querySelector('.tab-badge');
            if (badge) {
                badge.classList.remove('bg-white/25');
                badge.classList.add('bg-slate-200', 'text-slate-500');
            }
        });
        // Show selected tab content
        const content = document.getElementById('content-' + tabId);
        if (content) content.classList.add('active');
        // Activate selected tab button
        const activeBtn = document.getElementById('tab-' + tabId);
        if (activeBtn) {
            activeBtn.classList.remove('border-transparent', 'bg-slate-100', 'text-slate-500');
            activeBtn.classList.add('border-primary', 'bg-primary', 'text-white');
            const badge = activeBtn.querySelector('.tab-badge');
            if (badge) {
                badge.classList.add('bg-white/25');
                badge.classList.remove('bg-slate-200', 'text-slate-500');
            }
        }
    };

    // Read URL ?tab= param on page load
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('tab');
    if (tab && ['setiap-saat', 'berkala', 'serta-merta'].includes(tab)) {
        window.switchTab(tab);
    }

    // 4. Accordion Exclusive Toggle (Rekapitulasi page)
    const detailsEls = document.querySelectorAll('details.exclusive-accordion');
    detailsEls.forEach((targetDetail) => {
        targetDetail.addEventListener('click', () => {
            detailsEls.forEach((detail) => {
                if (detail !== targetDetail) {
                    detail.removeAttribute('open');
                    const summary = detail.querySelector('summary');
                    if (summary) {
                        summary.classList.remove('bg-blue-50/50', 'text-primary');
                        summary.classList.add('text-slate-700', 'hover:bg-slate-50');
                        const icon = summary.querySelector('i.accordion-icon');
                        if (icon) {
                            icon.classList.remove('text-primary');
                            icon.classList.add('text-slate-400');
                        }
                    }
                }
            });

            setTimeout(() => {
                const summary = targetDetail.querySelector('summary');
                if (!summary) return;
                const icon = summary.querySelector('i.accordion-icon');
                if (targetDetail.hasAttribute('open')) {
                    summary.classList.add('bg-blue-50/50', 'text-primary');
                    summary.classList.remove('text-slate-700', 'hover:bg-slate-50');
                    if (icon) { icon.classList.add('text-primary'); icon.classList.remove('text-slate-400'); }
                } else {
                    summary.classList.remove('bg-blue-50/50', 'text-primary');
                    summary.classList.add('text-slate-700', 'hover:bg-slate-50');
                    if (icon) { icon.classList.remove('text-primary'); icon.classList.add('text-slate-400'); }
                }
            }, 10);
        });
    });
});
