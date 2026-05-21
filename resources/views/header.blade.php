<!-- Navbar - Transparent with Hide/Show on Scroll (Isolated Styles) -->
<div id="biz-navbar" class="biz-navbar-fixed w-full fixed top-0 z-50 transition-all duration-500 ease-in-out">
    <div class="biz-navbar-container max-w-7xl mx-auto px-6 md:px-8">
        <div class="biz-navbar-flex flex justify-between items-center py-4 flex-wrap gap-5">
            <div class="biz-logo font-grotesk font-bold text-2xl tracking-tight text-white hover:scale-105 transition-transform duration-300">BizCash&Capital</div>
            
            <div class="biz-nav-links flex gap-8 items-center flex-wrap">
                <!-- Industries Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-2">
                        Industries
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white/95 backdrop-blur-md border border-white/20 shadow-xl z-50 hidden">
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Auto Repair</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Daycare</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Cleaning Business</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Beauty Salon</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Convenience Store</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Construction</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Attorney Firm</a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">Accounting Firm</a>
                            <div class="border-t border-slate-100 my-1"></div>
                            <a href="#" class="block px-4 py-2 text-sm font-semibold text-emerald-600 hover:bg-emerald-50 transition-colors duration-200">View All Industries →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Loans Dropdown -->
                <div class="biz-dropdown relative">
                    <span class="biz-dropdown-trigger biz-pill bg-white/10 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-white/20 transition-all duration-300 cursor-pointer border border-white/20 inline-flex items-center gap-2">
                        Loans
                        <svg class="biz-dropdown-arrow w-3 h-3 transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                    <div class="biz-dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white/95 backdrop-blur-md border border-white/20 shadow-xl z-50 hidden">
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">
                                <div class="flex items-center gap-2">
                                    <span>🏢</span>
                                    <span>Business Loan</span>
                                </div>
                                <span class="text-xs text-slate-400 block ml-6">$10K – $500K</span>
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">
                                <div class="flex items-center gap-2">
                                    <span>🏗️</span>
                                    <span>Commercial Loan</span>
                                </div>
                                <span class="text-xs text-slate-400 block ml-6">Up to $5M</span>
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">
                                <div class="flex items-center gap-2">
                                    <span>🇺🇸</span>
                                    <span>SBA Loan</span>
                                </div>
                                <span class="text-xs text-slate-400 block ml-6">Government-backed</span>
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-emerald-50 hover:text-emerald-600 transition-colors duration-200">
                                <div class="flex items-center gap-2">
                                    <span>🏗️</span>
                                    <span>Construction Loan</span>
                                </div>
                                <span class="text-xs text-slate-400 block ml-6">Interest only</span>
                            </a>
                            <div class="border-t border-slate-100 my-1"></div>
                            <a href="#" class="block px-4 py-2 text-sm font-semibold text-emerald-600 hover:bg-emerald-50 transition-colors duration-200">View All Loans →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Us Link -->
                <a href="{{ route('contact-page')}}" class="biz-contact-link text-white/80 hover:text-white text-sm font-medium transition-all duration-300 px-2 py-1">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<style>
    /* ============================================
       BIZCASH NAVBAR - ISOLATED STYLES
       No conflicts with existing page CSS
    ============================================ */
    
    /* Base navbar container - uses unique class names */
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
    
    /* Navbar hide/show animations */
    .biz-navbar-hidden {
        transform: translateY(-100%);
    }
    
    .biz-navbar-visible {
        transform: translateY(0);
    }
    
    /* Container styles */
    .biz-navbar-container {
        max-width: 1280px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    
    /* Flex layout for navbar content */
    .biz-navbar-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.25rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    
    /* Logo styling */
    .biz-logo {
        font-family: 'Space Grotesk', 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        line-height: 2rem;
        letter-spacing: -0.025em;
        color: #ffffff;
        transition: transform 0.3s ease, color 0.3s ease;
        cursor: default;
    }
    
    .biz-logo:hover {
        transform: scale(1.05);
    }
    
    /* Navigation links container */
    .biz-nav-links {
        display: flex;
        gap: 2rem;
        align-items: center;
        flex-wrap: wrap;
    }
    
    /* Pill/badge styling */
    .biz-pill {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        padding: 0.375rem 1rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        line-height: 1rem;
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
    
    /* Contact link styling */
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
    
    /* Sign in button */
    .biz-signin {
        border: 1px solid rgba(255, 255, 255, 0.4);
        color: #ffffff;
        padding: 0.5rem 1.25rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        line-height: 1.25rem;
        font-weight: 500;
        transition: all 0.3s ease;
        text-decoration: none;
        background: transparent;
    }
    
    .biz-signin:hover {
        border-color: #ffffff;
        background: #ffffff;
        color: #1e293b;
        transform: translateY(-1px);
    }
    
    /* Dropdown styles */
    .biz-dropdown-menu {
        border-radius: 0 !important;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.2s ease;
    }
    
    .biz-dropdown:hover .biz-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .biz-dropdown:hover .biz-dropdown-arrow {
        transform: rotate(180deg);
    }
    
    /* ===== SCROLLED STATE STYLES (applied via JS) ===== */
    .biz-navbar-fixed.biz-navbar-scrolled {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
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
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-signin {
        border-color: #cbd5e1;
        color: #334155;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-signin:hover {
        border-color: #0f172a;
        background: #0f172a;
        color: #ffffff;
    }
    
    .biz-navbar-fixed.biz-navbar-scrolled .biz-dropdown-menu {
        background: white;
        border-color: #e2e8f0;
    }
    
    /* Mobile responsive adjustments */
    @media (max-width: 768px) {
        .biz-navbar-container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        .biz-navbar-flex {
            flex-direction: column;
            gap: 0.75rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        
        .biz-nav-links {
            gap: 0.75rem;
            justify-content: center;
        }
        
        .biz-logo {
            font-size: 1.25rem;
        }
        
        .biz-pill {
            font-size: 0.7rem;
            padding: 0.25rem 0.75rem;
        }
        
        .biz-signin {
            font-size: 0.75rem;
            padding: 0.375rem 1rem;
        }
        
        .biz-contact-link {
            font-size: 0.75rem;
        }
        
        /* Mobile dropdown adjustments */
        .biz-dropdown-menu {
            position: fixed;
            top: auto;
            left: 1rem;
            right: 1rem;
            width: auto;
            margin-top: 0.5rem;
        }
    }
    
    /* Tablet adjustments */
    @media (min-width: 769px) and (max-width: 1024px) {
        .biz-nav-links {
            gap: 1rem;
        }
        
        .biz-logo {
            font-size: 1.3rem;
        }
    }
</style>

<script>
    // Navbar hide/show on scroll - ISOLATED
    (function() {
        let bizLastScrollTop = 0;
        const bizNavbar = document.getElementById('biz-navbar');
        let bizTicking = false;
        
        if (!bizNavbar) return;
        
        // Ensure navbar is visible on page load
        bizNavbar.classList.add('biz-navbar-visible');
        
        window.addEventListener('scroll', function() {
            if (!bizTicking) {
                requestAnimationFrame(function() {
                    let bizScrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    if (bizScrollTop > bizLastScrollTop && bizScrollTop > 100) {
                        // Scrolling down - hide navbar
                        bizNavbar.classList.add('biz-navbar-hidden');
                        bizNavbar.classList.remove('biz-navbar-visible');
                    } else {
                        // Scrolling up - show navbar
                        bizNavbar.classList.remove('biz-navbar-hidden');
                        bizNavbar.classList.add('biz-navbar-visible');
                    }
                    
                    // Add scrolled class based on scroll position
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
        
        // Handle page refresh - maintain correct state
        window.addEventListener('load', function() {
            const initialScroll = window.pageYOffset || document.documentElement.scrollTop;
            if (initialScroll > 50) {
                bizNavbar.classList.add('biz-navbar-scrolled');
            }
            bizNavbar.classList.add('biz-navbar-visible');
        });
    })();
</script>