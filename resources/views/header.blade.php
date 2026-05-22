<!-- Navbar - Fully Responsive with Mobile Menu (Dropdowns Fixed) -->
<div id="biz-navbar" class="biz-navbar-fixed w-full fixed top-0 z-50 transition-all duration-500 ease-in-out">
    <div class="biz-navbar-container max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="biz-navbar-flex flex justify-between items-center py-3 md:py-4">
            <div class="biz-logo font-grotesk font-bold text-xl md:text-2xl tracking-tight text-white hover:scale-105 transition-transform duration-300">BizCash&Capital</div>
            
            <!-- Desktop Navigation Links -->
            <div class="biz-desktop-nav hidden lg:flex items-center gap-6 xl:gap-8">
                <!-- Industries Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-2">
                        Industries
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white shadow-xl z-50">
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Auto Repair</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Attorney</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Cleaning Business</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Construction</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Convenience Store</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Daycare</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Beauty Salon</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Accounting</a>
                        </div>
                    </div>
                </div>
                
                <!-- Loan Programs Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-2">
                        Loan Programs
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white shadow-xl z-50">
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">SBA Loan</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Business Loan</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Commercial Loan</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Construction Loan</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Bridge Loan</a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Us Link -->
                <a href="#contact" class="biz-contact-link text-white/80 hover:text-white text-sm font-medium transition-all duration-300 px-2 py-1">Contact Us</a>
            </div>
            
            <!-- Mobile Menu Button (Hamburger) -->
            <button class="biz-mobile-menu-btn lg:hidden text-white focus:outline-none transition-all duration-300 hover:scale-110" id="biz-menu-btn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" class="biz-menu-icon"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="biz-close-icon hidden"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu Overlay -->
    <div class="biz-mobile-menu hidden lg:hidden w-full bg-white shadow-xl border-t border-gray-100" id="biz-mobile-menu">
        <div class="px-4 py-4 space-y-3">
            <!-- Mobile Industries Dropdown -->
            <div class="biz-mobile-dropdown w-full border-b border-gray-100 pb-2">
                <button class="biz-mobile-dropdown-btn w-full flex justify-between items-center px-4 py-3 text-left text-slate-700 font-medium text-base bg-gray-50 hover:bg-emerald-50 transition-all duration-200 rounded-lg">
                    Industries
                    <svg class="biz-mobile-arrow w-4 h-4 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="biz-mobile-submenu mt-2 ml-4 space-y-2" style="display: none;">
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Auto Repair</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Attorney</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Cleaning Business</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Construction</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Convenience Store</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Daycare</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Beauty Salon</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Accounting</a>
                </div>
            </div>
            
            <!-- Mobile Loan Programs Dropdown -->
            <div class="biz-mobile-dropdown w-full border-b border-gray-100 pb-2">
                <button class="biz-mobile-dropdown-btn w-full flex justify-between items-center px-4 py-3 text-left text-slate-700 font-medium text-base bg-gray-50 hover:bg-emerald-50 transition-all duration-200 rounded-lg">
                    Loan Programs
                    <svg class="biz-mobile-arrow w-4 h-4 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="biz-mobile-submenu mt-2 ml-4 space-y-2" style="display: none;">
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">SBA Loan</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Business Loan</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Commercial Loan</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Construction Loan</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Bridge Loan</a>
                </div>
            </div>
            
            <!-- Mobile Contact Link -->
            <a href="#contact" class="block px-4 py-3 text-slate-700 font-medium text-base bg-gray-50 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-all duration-200">Contact Us</a>
        </div>
    </div>
</div>

<style>
    /* ============================================
       BIZCASH NAVBAR - DROPDOWNS WORKING FIXED
    ============================================ */
    
    .biz-navbar-fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 9999;
        transition: transform 0.4s ease-in-out, background 0.3s ease, backdrop-filter 0.3s ease;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }
    
    .biz-navbar-hidden {
        transform: translateY(-100%);
    }
    
    .biz-navbar-visible {
        transform: translateY(0);
    }
    
    .biz-navbar-container {
        max-width: 1280px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .biz-navbar-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }
    
    .biz-logo {
        font-family: 'Space Grotesk', 'Plus Jakarta Sans', system-ui, sans-serif;
        font-weight: 700;
        font-size: 1.25rem;
        line-height: 1.75rem;
        letter-spacing: -0.025em;
        color: #ffffff;
        transition: transform 0.3s ease, color 0.3s ease;
        cursor: default;
    }
    
    .biz-logo:hover {
        transform: scale(1.05);
    }
    
    .biz-desktop-nav {
        display: none;
    }
    
    .biz-pill {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        padding: 0.375rem 1rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        color: #ffffff;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .biz-pill:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-1px);
    }
    
    .biz-contact-link {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-size: 0.875rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .biz-contact-link:hover {
        color: white;
    }
    
    /* Desktop Dropdown - FIXED */
    .biz-dropdown-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: opacity 0.2s ease, visibility 0.2s ease, transform 0.2s ease;
        pointer-events: none;
    }
    
    .biz-dropdown:hover .biz-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        pointer-events: auto;
    }
    
    .biz-dropdown:hover .biz-dropdown-arrow {
        transform: rotate(180deg);
    }
    
    /* Mobile Menu Button */
    .biz-mobile-menu-btn {
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Mobile Menu */
    .biz-mobile-menu {
        max-height: calc(100vh - 60px);
        overflow-y: auto;
    }
    
    .biz-mobile-dropdown-btn {
        font-weight: 500;
        font-size: 0.875rem;
        cursor: pointer;
    }
    
    /* Scroll State */
    .biz-navbar-fixed.biz-navbar-scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-logo {
        color: #0f172a;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-pill {
        background: #f1f5f9;
        color: #334155;
        border-color: #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-pill:hover {
        background: #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-link {
        color: #475569;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-link:hover {
        color: #1a7a4a;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-dropdown-menu {
        background: white;
        border: 1px solid #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-mobile-menu-btn svg {
        stroke: #0f172a;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-mobile-menu {
        background: white;
    }
    
    /* Tablet (768px - 1024px) */
    @media (min-width: 768px) {
        .biz-navbar-flex {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        
        .biz-logo {
            font-size: 1.5rem;
            line-height: 2rem;
        }
    }
    
    /* Desktop (1024px and above) */
    @media (min-width: 1024px) {
        .biz-desktop-nav {
            display: flex;
        }
        
        .biz-mobile-menu-btn {
            display: none;
        }
        
        .biz-mobile-menu {
            display: none !important;
        }
    }
    
    /* Large Desktop (1280px and above) */
    @media (min-width: 1280px) {
        .biz-desktop-nav {
            gap: 2rem;
        }
    }
</style>

<script>
    // Navbar hide/show on scroll + Mobile Menu Toggle
    (function() {
        let bizLastScrollTop = 0;
        const bizNavbar = document.getElementById('biz-navbar');
        const menuBtn = document.getElementById('biz-menu-btn');
        const mobileMenu = document.getElementById('biz-mobile-menu');
        let bizTicking = false;
        
        // Mobile Menu Toggle
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                const isHidden = mobileMenu.classList.contains('hidden');
                const menuIcon = menuBtn.querySelector('.biz-menu-icon');
                const closeIcon = menuBtn.querySelector('.biz-close-icon');
                
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    if (menuIcon) menuIcon.classList.add('hidden');
                    if (closeIcon) closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    if (menuIcon) menuIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                }
            });
        }
        
        // Mobile Dropdown Toggle - FIXED
        const mobileDropdownBtns = document.querySelectorAll('.biz-mobile-dropdown-btn');
        mobileDropdownBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const submenu = this.nextElementSibling;
                const arrow = this.querySelector('.biz-mobile-arrow');
                
                if (submenu) {
                    if (submenu.style.display === 'none' || getComputedStyle(submenu).display === 'none') {
                        submenu.style.display = 'block';
                        if (arrow) arrow.style.transform = 'rotate(180deg)';
                    } else {
                        submenu.style.display = 'none';
                        if (arrow) arrow.style.transform = 'rotate(0deg)';
                    }
                }
            });
        });
        
        if (!bizNavbar) return;
        
        bizNavbar.classList.add('biz-navbar-visible');
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    const menuIcon = menuBtn?.querySelector('.biz-menu-icon');
                    const closeIcon = menuBtn?.querySelector('.biz-close-icon');
                    if (menuIcon) menuIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                    
                    // Reset all mobile submenus
                    document.querySelectorAll('.biz-mobile-submenu').forEach(sub => {
                        sub.style.display = 'none';
                    });
                    document.querySelectorAll('.biz-mobile-arrow').forEach(arrow => {
                        arrow.style.transform = 'rotate(0deg)';
                    });
                }
            }
        });
        
        // Close mobile menu on window resize (if switching to desktop)
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const menuIcon = menuBtn?.querySelector('.biz-menu-icon');
                const closeIcon = menuBtn?.querySelector('.biz-close-icon');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            }
        });
        
        // Scroll handler
        window.addEventListener('scroll', function() {
            if (!bizTicking) {
                requestAnimationFrame(function() {
                    let bizScrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    if (bizScrollTop > bizLastScrollTop && bizScrollTop > 100) {
                        bizNavbar.classList.add('biz-navbar-hidden');
                        bizNavbar.classList.remove('biz-navbar-visible');
                    } else {
                        bizNavbar.classList.remove('biz-navbar-hidden');
                        bizNavbar.classList.add('biz-navbar-visible');
                    }
                    
                    if (bizScrollTop > 50) {
                        bizNavbar.classList.add('biz-navbar-scrolled');
                    } else {
                        bizNavbar.classList.remove('biz-navbar-scrolled');
                    }
                    
                    bizLastScrollTop = bizScrollTop <= 0 ? 0 : bizScrollTop;
                    bizTicking = false;
                });
                bizTicking = true;
            }
        });
        
        window.addEventListener('load', function() {
            const initialScroll = window.pageYOffset || document.documentElement.scrollTop;
            if (initialScroll > 50) {
                bizNavbar.classList.add('biz-navbar-scrolled');
            }
            bizNavbar.classList.add('biz-navbar-visible');
        });
    })();
</script>