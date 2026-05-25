<!-- Navbar - Fully Responsive with Mobile Menu (Dropdowns Fixed) -->
<div id="biz-navbar" class="biz-navbar-fixed w-full fixed top-0 z-50 transition-all duration-500 ease-in-out">
    <div class="biz-navbar-container max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="biz-navbar-flex flex justify-between items-center py-2 md:py-4">
            <!-- Logo as Image instead of Text -->
            <a href="/" class="biz-logo-link">
                <img src="{{ asset('images/logo-1.png')}}" alt="BizCash&Capital Logo" class="biz-logo-img h-7 sm:h-8 md:h-10 w-auto hover:scale-105 transition-transform duration-300">
            </a>
            
            <!-- Desktop Navigation Links -->
            <div class="biz-desktop-nav hidden lg:flex items-center gap-4 xl:gap-8">
                <!-- Industries Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-3 md:px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-1.5">
                        Industries
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white shadow-xl z-50">
                        <div class="py-2">
                            <a href="{{ url('/auto-repair-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Auto Repair</a>
                            <a href="{{ url('/attorney-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Attorney</a>
                            <a href="{{ url('/cleaning-business')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Cleaning Business</a>
                            <a href="{{ url('/construction-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Construction</a>
                            <a href="{{ url('/convenience-store')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Convenience Store</a>
                            <a href="{{ url('/day-care-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Daycare</a>
                            <a href="{{ url('/beauty-saloon-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Beauty Salon</a>
                            <a href="{{ url('/accounting-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Accounting</a>
                        </div>
                    </div>
                </div>
                
                <!-- Loan Programs Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-3 md:px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-1.5">
                        Loan Programs
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white shadow-xl z-50">
                        <div class="py-2">
                            <a href="{{url('/sba-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">SBA Loan</a>
                            <a href="{{url('/business-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Business Loan</a>
                            <a href="{{url('/commercial-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Commercial Loan</a>
                            <a href="{{url('/contstruction-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Construction Loan</a>
                            <a href="{{url('/bridge-loan')}}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Bridge Loan</a>
                        </div>
                    </div>
                </div>
                
                <!-- Get Funded Button -->
                <a href="{{ url('/apply-now')}}" class="biz-get-funded-btn bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-1.5 rounded-full text-xs md:text-sm font-semibold transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105 inline-flex items-center gap-1.5">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                    Get Funded
                </a>
                
                <!-- Contact Us Button -->
                <a href="{{ url('/contact')}}" class="biz-contact-btn bg-white/20 hover:bg-white/30 text-white px-4 py-1.5 rounded-full text-xs md:text-sm font-semibold transition-all duration-300 inline-flex items-center gap-1.5 border border-white/30">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    Contact Us
                </a>
            </div>
            
            <!-- Mobile Menu Button (Hamburger) -->
            <button class="biz-mobile-menu-btn lg:hidden text-white focus:outline-none transition-all duration-300 hover:scale-110" id="biz-menu-btn">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" class="biz-menu-icon"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" class="biz-close-icon hidden"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu Overlay - FULL HEIGHT -->
    <div class="biz-mobile-menu hidden lg:hidden w-full bg-white shadow-xl border-t border-gray-100 fixed left-0" style="height: calc(100vh - 56px); overflow-y: auto;" id="biz-mobile-menu">
        <div class="px-4 py-3 space-y-2">
            <!-- Get Funded - Mobile (Prominent) -->
            <a href="{{ url('/apply-now')}}" class="flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white px-4 py-2.5 rounded-lg font-semibold text-sm transition-all duration-200 shadow-md">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                Get Funded Now
            </a>
            
            <!-- Mobile Industries Dropdown -->
            <div class="biz-mobile-dropdown w-full border-b border-gray-100">
                <button class="biz-mobile-dropdown-btn w-full flex justify-between items-center px-3 py-2.5 text-left text-slate-700 font-medium text-sm bg-gray-50 hover:bg-emerald-50 transition-all duration-200 rounded-lg">
                    Industries
                    <svg class="biz-mobile-arrow w-3.5 h-3.5 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="biz-mobile-submenu mt-1 ml-3 space-y-1" style="display: none;">
                    <a href="{{ url('/auto-repair-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Auto Repair</a>
                    <a href="{{ url('/attorney-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Attorney</a>
                    <a href="{{ url('/cleaning-business')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Cleaning Business</a>
                    <a href="{{ url('/construction-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Construction</a>
                    <a href="{{ url('/convenience-store')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Convenience Store</a>
                    <a href="{{ url('/day-care-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Daycare</a>
                    <a href="{{ url('/beauty-saloon-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Beauty Salon</a>
                    <a href="{{ url('/accounting-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Accounting</a>
                </div>
            </div>
            
            <!-- Mobile Loan Programs Dropdown -->
            <div class="biz-mobile-dropdown w-full border-b border-gray-100">
                <button class="biz-mobile-dropdown-btn w-full flex justify-between items-center px-3 py-2.5 text-left text-slate-700 font-medium text-sm bg-gray-50 hover:bg-emerald-50 transition-all duration-200 rounded-lg">
                    Loan Programs
                    <svg class="biz-mobile-arrow w-3.5 h-3.5 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>
                <div class="biz-mobile-submenu mt-1 ml-3 space-y-1" style="display: none;">
                    <a href="{{url('/sba-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">SBA Loan</a>
                    <a href="{{url('/business-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Business Loan</a>
                    <a href="{{url('/commercial-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Commercial Loan</a>
                    <a href="{{url('/contstruction-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Construction Loan</a>
                    <a href="{{url('/bridge-loan')}}" class="block px-3 py-2 text-sm text-slate-600 hover:bg-emerald-50 hover:text-emerald-600 rounded-lg transition-colors duration-200">Bridge Loan</a>
                </div>
            </div>
            
            <!-- Mobile Contact Button -->
            <a href="{{ url('/contact')}}" class="flex items-center justify-center gap-2 border border-emerald-600 text-emerald-700 hover:bg-emerald-50 px-3 py-2.5 rounded-lg font-semibold text-sm transition-all duration-200">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                Contact Us
            </a>
        </div>
    </div>
</div>

<style>
    /* ============================================
       BIZCASH NAVBAR - FULLY RESPONSIVE
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
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }
    
    /* Logo Image Styles */
    .biz-logo-link {
        display: inline-block;
        line-height: 0;
    }
    
    .biz-logo-img {
        height: 28px;
        width: auto;
        transition: transform 0.3s ease;
        object-fit: contain;
    }
    
    .biz-logo-img:hover {
        transform: scale(1.05);
    }
    
    .biz-desktop-nav {
        display: none;
    }
    
    .biz-pill {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        padding: 0.3rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.7rem;
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
    
    /* Get Funded Button Styles */
    .biz-get-funded-btn {
        background: #1a7a4a;
        color: white;
        border-radius: 9999px;
        box-shadow: 0 4px 12px rgba(26, 122, 74, 0.3);
    }
    
    .biz-get-funded-btn:hover {
        background: #0f5a38;
        transform: scale(1.05);
        box-shadow: 0 6px 16px rgba(26, 122, 74, 0.4);
    }
    
    /* Contact Button Styles */
    .biz-contact-btn {
        border-radius: 9999px;
        backdrop-filter: blur(4px);
    }
    
    .biz-contact-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-1px);
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
        padding: 0.4rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Mobile Menu - FULL HEIGHT */
    .biz-mobile-menu {
        position: fixed;
        left: 0;
        right: 0;
        top: 56px;
        bottom: 0;
        z-index: 9998;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
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
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-pill {
        background: #f1f5f9;
        color: #334155;
        border-color: #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-pill:hover {
        background: #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-get-funded-btn {
        background: #1a7a4a;
        color: white;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-get-funded-btn:hover {
        background: #0f5a38;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-btn {
        background: rgba(0, 0, 0, 0.05);
        color: #1a7a4a;
        border-color: #e2e8f0;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-btn:hover {
        background: #1a7a4a;
        color: white;
        border-color: #1a7a4a;
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
    
    /* Small Mobile (up to 480px) */
    @media (max-width: 480px) {
        .biz-navbar-flex {
            padding-top: 0.35rem;
            padding-bottom: 0.35rem;
        }
        
        .biz-logo-img {
            height: 24px;
        }
        
        .biz-mobile-menu {
            top: 52px;
        }
        
        .biz-mobile-dropdown-btn {
            padding: 0.5rem 0.75rem;
            font-size: 0.8rem;
        }
    }
    
    /* Tablet (640px - 768px) */
    @media (min-width: 640px) {
        .biz-logo-img {
            height: 32px;
        }
    }
    
    /* Tablet (768px - 1024px) */
    @media (min-width: 768px) {
        .biz-navbar-flex {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        
        .biz-logo-img {
            height: 38px;
        }
        
        .biz-mobile-menu {
            top: 60px;
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
        
        .biz-logo-img {
            height: 45px;
        }
        
        .biz-pill {
            padding: 0.375rem 1rem;
            font-size: 0.75rem;
        }
        
        .biz-get-funded-btn {
            padding: 0.375rem 1.25rem;
        }
    }
    
    /* Large Desktop (1280px and above) */
    @media (min-width: 1280px) {
        .biz-desktop-nav {
            gap: 2rem;
        }
        
        .biz-logo-img {
            height: 50px;
        }
        
        .biz-pill {
            padding: 0.5rem 1.25rem;
            font-size: 0.8rem;
        }
        
        .biz-get-funded-btn {
            padding: 0.5rem 1.5rem;
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
                    document.body.style.overflow = 'hidden';
                } else {
                    mobileMenu.classList.add('hidden');
                    if (menuIcon) menuIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        }
        
        // Mobile Dropdown Toggle
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
                    document.body.style.overflow = '';
                    
                    document.querySelectorAll('.biz-mobile-submenu').forEach(sub => {
                        sub.style.display = 'none';
                    });
                    document.querySelectorAll('.biz-mobile-arrow').forEach(arrow => {
                        arrow.style.transform = 'rotate(0deg)';
                    });
                }
            }
        });
        
        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const menuIcon = menuBtn?.querySelector('.biz-menu-icon');
                const closeIcon = menuBtn?.querySelector('.biz-close-icon');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
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