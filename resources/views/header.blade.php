<!-- Navbar - Transparent with Hide/Show on Scroll -->
<div id="navbar" class="w-full fixed top-0 z-50 transition-all duration-500 ease-in-out" style="background: rgba(255,255,255,0.08); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(255,255,255,0.15);">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="flex justify-between items-center py-4 flex-wrap gap-5">
            <div class="font-grotesk font-bold text-2xl tracking-tight text-white hover:scale-105 transition-transform duration-300">BizCash&Capital</div>
            <div class="flex gap-8 items-center flex-wrap">
                <span class="bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20">Business Loans</span>
                <span class="bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20">Fast Funding</span>
                <span class="bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20">Low Interest</span>
                <a href="#" class="border border-white/40 hover:border-white text-white px-5 py-2 rounded-full text-sm font-medium transition-all duration-300 hover:bg-white hover:text-slate-800">Sign in</a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Navbar hide/show animation */
    .navbar-hidden {
        transform: translateY(-100%);
    }
    
    .navbar-visible {
        transform: translateY(0);
    }
</style>

<script>
    // Navbar hide/show on scroll
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    let ticking = false;
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    // Scrolling down - hide navbar
                    navbar.classList.add('navbar-hidden');
                    navbar.classList.remove('navbar-visible');
                } else {
                    // Scrolling up - show navbar
                    navbar.classList.remove('navbar-hidden');
                    navbar.classList.add('navbar-visible');
                }
                
                // Add background opacity based on scroll position
                if (scrollTop > 50) {
                    navbar.style.background = 'rgba(255,255,255,0.95)';
                    navbar.style.backdropFilter = 'blur(8px)';
                    navbar.style.borderBottom = '1px solid rgba(0,0,0,0.1)';
                    // Change text colors when scrolled
                    const logo = navbar.querySelector('.font-grotesk');
                    const pills = navbar.querySelectorAll('.bg-white\\/10');
                    const signInBtn = navbar.querySelector('.border-white\\/40');
                    
                    if (logo) logo.classList.add('text-slate-800');
                    pills.forEach(pill => {
                        pill.classList.add('bg-slate-100', 'text-slate-700', 'border-slate-200');
                        pill.classList.remove('bg-white/10', 'text-white', 'border-white/20');
                    });
                    if (signInBtn) {
                        signInBtn.classList.add('border-slate-300', 'text-slate-700');
                        signInBtn.classList.remove('border-white/40', 'text-white');
                    }
                } else {
                    navbar.style.background = 'rgba(255,255,255,0.08)';
                    navbar.style.backdropFilter = 'blur(12px)';
                    navbar.style.borderBottom = '1px solid rgba(255,255,255,0.15)';
                    // Revert text colors
                    const logo = navbar.querySelector('.font-grotesk');
                    const pills = navbar.querySelectorAll('.bg-slate-100');
                    const signInBtn = navbar.querySelector('.border-slate-300');
                    
                    if (logo) logo.classList.remove('text-slate-800');
                    pills.forEach(pill => {
                        pill.classList.remove('bg-slate-100', 'text-slate-700', 'border-slate-200');
                        pill.classList.add('bg-white/10', 'text-white', 'border-white/20');
                    });
                    if (signInBtn) {
                        signInBtn.classList.remove('border-slate-300', 'text-slate-700');
                        signInBtn.classList.add('border-white/40', 'text-white');
                    }
                }
                
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Ensure navbar is visible on page load
    navbar.classList.add('navbar-visible');
</script>