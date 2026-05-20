<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BizCashAndCapital — Best Business Loans for Low Credit Score</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter + Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'grotesk': ['Space Grotesk', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 2s infinite',
                        'scroll-anim': 'scrollAnim 2s infinite',
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        scrollAnim: {
                            '0%': { opacity: '1', transform: 'translateX(-50%) translateY(0)' },
                            '100%': { opacity: '0', transform: 'translateX(-50%) translateY(15px)' },
                        },
                        marquee: {
                            'from': { transform: 'translateX(0)' },
                            'to': { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Custom animations and Valorant border styles that can't be done with Tailwind */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        
        @keyframes scrollAnim {
            0% { opacity: 1; transform: translateX(-50%) translateY(0); }
            100% { opacity: 0; transform: translateX(-50%) translateY(15px); }
        }
        
        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        
        .animate-pulse-custom {
            animation: pulse 2s infinite;
        }
        
        .animate-scroll {
            animation: scrollAnim 2s infinite;
        }
        
        .animate-marquee {
            animation: marquee 25s linear infinite;
        }
        
        /* Valorant border style */
        .valorant-border {
            position: relative;
            border: none !important;
        }
        
        .valorant-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #3b82f6 0%, #1e5aff 25%, transparent 50%, #3b82f6 75%, #1e5aff 100%);
            border-radius: inherit;
            z-index: -1;
            opacity: 0.4;
        }
        
        .valorant-border::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: inherit;
            border-radius: inherit;
            z-index: -1;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #1e5aff;
        }
    </style>
</head>

<body class="font-inter bg-slate-50 text-slate-900 overflow-x-hidden">

    <!-- Navbar - Full Width -->
    <div class="w-full border-b border-slate-200 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex justify-between items-center py-6 flex-wrap gap-5">
                <div class="font-grotesk font-bold text-2xl tracking-tight bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">BizCash&Capital</div>
                <div class="flex gap-8 items-center flex-wrap">
                    <span class="bg-blue-50 px-4 py-1.5 rounded-full text-xs font-semibold text-slate-800">Business Loans</span>
                    <span class="bg-blue-50 px-4 py-1.5 rounded-full text-xs font-semibold text-slate-800">Fast Funding</span>
                    <span class="bg-blue-50 px-4 py-1.5 rounded-full text-xs font-semibold text-slate-800">Low Interest</span>
                    <a href="#" class="border border-slate-300 hover:border-slate-800 transition-all px-5 py-2 rounded-full text-sm font-medium text-slate-800">Sign in</a>
                </div>
            </div>
        </div>
    </div>

    <!-- HERO Section -->
    <div class="relative overflow-hidden min-h-screen">
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/landscape.mp4') }}" type="video/mp4">
        </video>
        
        <!-- Subtle color overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black/30 to-black/20 z-10"></div>
        
        <div class="relative z-20 h-screen flex items-center justify-between max-w-7xl mx-auto px-12 lg:px-16">
            <!-- Left Side - Hero Text -->
            <div class="max-w-[55%]">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full mb-7 border border-white/20">
                    <span class="inline-block w-1.5 h-1.5 bg-blue-500 rounded-full animate-pulse-custom"></span>
                    <span class="text-[11px] font-medium text-white/90 tracking-wider">01 · MANIFESTO</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="font-grotesk text-[clamp(48px,7vw,88px)] font-semibold leading-[1.08] tracking-tighter text-white mb-6">
                    best business<br>
                    <span class="text-blue-500 shadow-[0_0_30px_rgba(59,130,246,0.4)]">loan</span> —<br>
                    low credit score
                </h1>
                
                <!-- Description -->
                <p class="text-base text-white/80 max-w-lg mb-8 leading-relaxed">
                    Fast, flexible loans for entrepreneurs with low credit scores. No hidden fees, no endless paperwork.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex gap-4 items-center flex-wrap">
                    <a href="#apply" class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-3 font-semibold text-sm rounded-full transition-all">Get funding →</a>
                    <a href="tel:+12166470007" class="bg-transparent text-white px-7 py-3 font-medium text-sm rounded-full border border-white/30 hover:border-white/50 transition-all">+1 (216) 647-0007</a>
                </div>
            </div>
            
            <!-- Right Side - Dashboard Cards -->
            <div class="max-w-[40%] w-full">
                <div class="grid grid-cols-3 gap-5">
                    <!-- Card 1 -->
                    <div class="valorant-border bg-white/95 backdrop-blur-md rounded-2xl p-5">
                        <div class="flex justify-between items-center mb-4">
                            <span class="font-semibold text-[11px] text-slate-700">loan offer</span>
                            <span class="bg-blue-500 px-2.5 py-1 rounded-full text-[9px] font-semibold text-white">pre-approved</span>
                        </div>
                        <div class="text-[28px] font-bold font-grotesk text-slate-900 mb-1">$75k</div>
                        <div class="text-[10px] text-slate-500 mb-4">up to $500k available</div>
                        <div class="border-t border-slate-100 pt-3 flex justify-between">
                            <span class="text-[10px] text-slate-500">APR from 8.9%</span>
                            <span class="text-[10px] font-semibold text-slate-800">24 mo term</span>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="valorant-border bg-white/95 backdrop-blur-md rounded-2xl p-5">
                        <div class="mb-4"><span class="font-semibold text-[11px] text-slate-700">quick decision</span></div>
                        <div class="text-[22px] font-bold font-grotesk text-slate-900 mb-1">Same-day</div>
                        <div class="text-[10px] text-slate-500 mb-5">response after submission</div>
                        <a href="#" class="inline-block bg-slate-800 text-white px-3.5 py-1.5 text-[10px] font-medium rounded-full">check →</a>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="valorant-border bg-white/95 backdrop-blur-md rounded-2xl p-5">
                        <div class="mb-4"><span class="font-semibold text-[11px] text-slate-700">trust score</span></div>
                        <div class="text-[36px] font-bold text-slate-900 mb-1">4.92</div>
                        <div class="text-[10px] text-slate-500 mb-4">★ based on 2,100+ reviews</div>
                        <div class="bg-slate-100 rounded-full h-1 overflow-hidden">
                            <div class="w-[92%] bg-blue-500 h-1 rounded-full"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Trust Badge Row -->
                <div class="flex justify-between gap-4 mt-6">
                    <div class="flex-1 flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2.5 rounded-full">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <span class="text-[11px] text-white">4.9 Rating</span>
                    </div>
                    <div class="flex-1 flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2.5 rounded-full">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M20 12H4M12 4v16"/></svg>
                        <span class="text-[11px] text-white">10k+ Customers</span>
                    </div>
                    <div class="flex-1 flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2.5 rounded-full">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                        <span class="text-[11px] text-white">24/7 Support</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-7 left-1/2 -translate-x-1/2 z-30 text-center">
            <div class="w-6 h-10 border-2 border-white/40 rounded-full mx-auto relative">
                <div class="w-1 h-2 bg-white rounded-full absolute top-2 left-1/2 -translate-x-1/2 animate-scroll"></div>
            </div>
        </div>
    </div>

    <!-- Marquee -->
    <div class="bg-slate-800 py-5 overflow-hidden whitespace-nowrap w-full">
        <div class="inline-flex gap-12 animate-marquee pl-6">
            <span class="font-bold text-white">BUSINESS LOANS</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">FAST FUNDING</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">NO APPLICATION FEE</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">LOW INTEREST RATES</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">BAD CREDIT WELCOME</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">SBA & COMMERCIAL</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">BUSINESS LOANS</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white">FAST FUNDING</span> <span class="text-white/50">✦</span>
        </div>
    </div>

    <!-- Get Started Section -->
    <div id="apply" class="w-full py-20 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <!-- Centered header -->
            <div class="text-center mb-[70px]">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 backdrop-blur-sm px-5 py-1.5 rounded-full text-xs font-semibold text-blue-500 mb-6 border border-blue-500/20">
                    <span class="inline-block w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                    Get Started
                </div>
                <h2 class="font-grotesk text-[clamp(40px,6vw,56px)] font-bold tracking-tighter mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">Start your journey in minutes</h2>
                <p class="text-slate-500 max-w-[520px] mx-auto text-base leading-relaxed">With our personalized small business loans, achieve financial freedom while fueling your business growth.</p>
            </div>
            
            <!-- 3 Column Feature Cards -->
            <div class="grid md:grid-cols-3 gap-7 mb-[70px]">
                <!-- Card 1 -->
                <div class="card valorant-border text-center p-9 relative border-none transition-all duration-300 bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-35 z-0">
                    <div class="relative z-10">
                        <div class="w-[72px] h-[72px] bg-white/95 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg>
                        </div>
                        <div class="text-xl font-bold mb-2.5 text-slate-800 bg-white/85 inline-block px-2">No Application Fee</div>
                        <p class="text-slate-700 text-sm leading-relaxed bg-white/80 p-2 rounded-xl">Zero hidden fees. Transparent process from start to finish.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card valorant-border text-center p-9 relative border-none transition-all duration-300 bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-35 z-0">
                    <div class="relative z-10">
                        <div class="w-[72px] h-[72px] bg-white/95 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <div class="text-xl font-bold mb-2.5 text-slate-800 bg-white/85 inline-block px-2">Quick Funding</div>
                        <p class="text-slate-700 text-sm leading-relaxed bg-white/80 p-2 rounded-xl">Approved in days, funded within a week. Streamlined evaluation.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card valorant-border text-center p-9 relative border-none transition-all duration-300 bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1.5">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-35 z-0">
                    <div class="relative z-10">
                        <div class="w-[72px] h-[72px] bg-white/95 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                        </div>
                        <div class="text-xl font-bold mb-2.5 text-slate-800 bg-white/85 inline-block px-2">Low Interest Rates</div>
                        <p class="text-slate-700 text-sm leading-relaxed bg-white/80 p-2 rounded-xl">Flexible terms tailored to your cash flow. Designed for growth.</p>
                    </div>
                </div>
            </div>
            
            <!-- Loan Amount Calculator -->
            <div class="valorant-border bg-white rounded-3xl p-12 mb-[70px] shadow-xl relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1400&h=500&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-30 z-0">
                <div class="relative z-10 bg-white/92 rounded-3xl -m-12 p-12">
                    <div class="flex justify-between items-center flex-wrap gap-7">
                        <div>
                            <div class="font-grotesk font-semibold text-[12px] tracking-[0.12em] text-blue-500 mb-3">HOW MUCH CAPITAL?</div>
                            <div class="text-[52px] font-bold font-grotesk text-slate-800 tracking-tighter">$5K – $500K</div>
                            <div class="flex gap-8 mt-6 flex-wrap">
                                <div><span class="font-bold text-lg text-slate-800">0%</span><br><span class="text-xs text-slate-500">application fee</span></div>
                                <div><span class="font-bold text-lg text-slate-800">24h</span><br><span class="text-xs text-slate-500">decision time</span></div>
                                <div><span class="font-bold text-lg text-slate-800">6.5%</span><br><span class="text-xs text-slate-500">starting APR</span></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="bg-slate-800 text-white px-10 py-4 text-sm font-semibold rounded-full inline-block transition-all hover:bg-slate-700">Apply Now — Free →</a>
                            <div class="font-grotesk text-xs text-slate-400 mt-3.5">( Quick Apply )</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Stats row -->
            <div class="grid md:grid-cols-3 gap-5">
                <div class="valorant-border bg-white rounded-2xl p-10 text-center transition-all relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-30 z-0">
                    <div class="relative z-10 bg-white/90 rounded-2xl -m-10 p-10">
                        <div class="text-[56px] font-extrabold font-grotesk text-slate-800 mb-2">3,000+</div>
                        <div class="text-xs text-slate-500">applications processed</div>
                        <div class="w-[50px] h-[2px] bg-gradient-to-r from-blue-500 to-transparent mx-auto mt-5"></div>
                    </div>
                </div>
                <div class="valorant-border bg-white rounded-2xl p-10 text-center transition-all relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-30 z-0">
                    <div class="relative z-10 bg-white/90 rounded-2xl -m-10 p-10">
                        <div class="text-[56px] font-extrabold font-grotesk text-slate-800 mb-2">6+</div>
                        <div class="text-xs text-slate-500">years of expertise</div>
                        <div class="w-[50px] h-[2px] bg-gradient-to-r from-blue-500 to-transparent mx-auto mt-5"></div>
                    </div>
                </div>
                <div class="valorant-border bg-white rounded-2xl p-10 text-center transition-all relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-30 z-0">
                    <div class="relative z-10 bg-white/90 rounded-2xl -m-10 p-10">
                        <div class="text-[56px] font-extrabold font-grotesk text-slate-800 mb-2">$500K</div>
                        <div class="text-xs text-slate-500">max funding available</div>
                        <div class="w-[50px] h-[2px] bg-gradient-to-r from-blue-500 to-transparent mx-auto mt-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="w-full py-20 bg-slate-100 relative overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/hero-section.mp4') }}" type="video/mp4">
            <source src="https://videos.pexels.com/video-files/3195394/3195394-uhd_2560_1440_30fps.mp4" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/90 to-slate-800/95 z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border rounded-3xl p-12 bg-white/5 backdrop-blur-sm">
                <div class="mb-6">
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold inline-block mr-2">03: About Us</span>
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold inline-block">Our Mission</span>
                </div>
                <div class="font-grotesk text-[clamp(42px,8vw,90px)] font-bold leading-[1] tracking-tighter mb-8 text-white">digital driving force<br>for your business</div>
                <div class="font-grotesk text-sm text-white/70 mb-12">( full cycle financial partner )</div>
                <div class="grid md:grid-cols-2 gap-12">
                    <p class="text-[15px] leading-relaxed text-white/85">We empower businesses and ensure financial prosperity through tailored commercial loan services. Every brand gets a bespoke approach.</p>
                    <p class="text-[15px] leading-relaxed text-white/85">To build an effective strategy, we study your business, your market, and your goals in depth — then deliver the right capital solution.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Loan Services Section -->
    <div class="w-full py-20 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#3b82f6_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-[70px]">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 backdrop-blur-sm px-5 py-1.5 rounded-full text-xs font-semibold text-blue-500 mb-6 border border-blue-500/20">
                    <span class="inline-block w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                    Loan Solutions
                </div>
                <h2 class="font-grotesk text-[clamp(40px,6vw,52px)] font-bold tracking-tighter mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">All loan solutions</h2>
                <p class="text-slate-500 max-w-[520px] mx-auto text-base">Choose the perfect financing option for your business needs</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-7 mb-7">
                <!-- Business Loan -->
                <div class="valorant-border rounded-2xl overflow-hidden transition-all cursor-pointer bg-white">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-blue-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">01</div></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">Business Loan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">Expand & grow your business with flexible capital. Get the funding you need to take your business to the next level.</p>
                        <div class="flex justify-between items-center">
                            <div class="text-blue-500 text-[13px] font-medium flex items-center gap-1.5">Apply <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                        </div>
                    </div>
                </div>
                
                <!-- Commercial Loan -->
                <div class="valorant-border rounded-2xl overflow-hidden transition-all cursor-pointer bg-white">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-blue-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">02</div></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">Commercial Loan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">Real estate & equipment financing solutions. Purchase property or upgrade your business equipment.</p>
                        <div class="flex justify-between items-center">
                            <div class="text-blue-500 text-[13px] font-medium flex items-center gap-1.5">Apply <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                        </div>
                    </div>
                </div>
                
                <!-- SBA Loan -->
                <div class="valorant-border rounded-2xl overflow-hidden transition-all cursor-pointer bg-white">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-blue-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">03</div></div>
                    </div>
                    <div class="p-7">
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">SBA Loan</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-5">Government-backed funding for small businesses. Lower rates and longer terms with SBA guarantees.</p>
                        <div class="flex justify-between items-center">
                            <div class="text-blue-500 text-[13px] font-medium flex items-center gap-1.5">Apply <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Construction Loan - Featured Full Width Card -->
            <div class="valorant-border rounded-2xl overflow-hidden transition-all cursor-pointer bg-white mt-0">
                <div class="grid md:grid-cols-[1fr,1.2fr] min-h-[280px]">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503387762-592b58c9ba43?w=600&h=500&fit=crop" class="w-full h-full object-cover">
                        <div class="absolute top-5 left-5"><div class="bg-blue-500/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">Featured</div></div>
                    </div>
                    <div class="p-10 bg-white">
                        <div class="text-sm font-semibold text-blue-500 mb-2">04</div>
                        <h3 class="text-3xl font-bold mb-4 text-slate-800">Construction Loan</h3>
                        <p class="text-slate-500 text-[15px] leading-relaxed mb-6">Build your vision with specialized construction financing. Perfect for new construction, renovations, or expansions.</p>
                        <div class="flex gap-6 flex-wrap mb-7">
                            <div><span class="font-bold text-slate-800">Interest Only</span><br><span class="text-xs text-slate-400">during construction</span></div>
                        </div>
                        <div class="inline-flex items-center gap-2 bg-slate-800 px-7 py-3 rounded-full text-white font-semibold text-sm transition-all hover:bg-slate-700">
                            <span>Apply for Construction Loan</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="border border-slate-300 hover:border-slate-800 transition-all px-9 py-3.5 text-sm font-semibold rounded-full inline-block text-slate-800">View all loan options →</a>
            </div>
        </div>
    </div>

    <!-- Why Us Section -->
    <div class="w-full py-20 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#3b82f6_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-[70px]">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 backdrop-blur-sm px-5 py-1.5 rounded-full text-xs font-semibold text-blue-500 mb-6 border border-blue-500/20">
                    <span class="inline-block w-1.5 h-1.5 bg-blue-500 rounded-full"></span>
                    Why Choose Us
                </div>
                <h2 class="font-grotesk text-[clamp(40px,6vw,52px)] font-bold tracking-tighter mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">Your reliable partners</h2>
                <p class="text-slate-500 max-w-[520px] mx-auto text-base">We're committed to your success with transparent, fast, and flexible loan solutions</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-7">
                <div class="card valorant-border text-center p-10 relative border-none transition-all bg-white rounded-2xl overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0">
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">Quick Funding</h3>
                        <p class="text-slate-500 text-[15px] leading-relaxed">Shortened approval with practical evaluation ensures fast capital when needed. Get funded in days, not weeks.</p>
                        <div class="mt-6 inline-flex items-center gap-2 text-blue-500 text-[13px] font-medium"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                    </div>
                </div>
                
                <div class="card valorant-border text-center p-10 relative border-none transition-all bg-white rounded-2xl overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0">
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">No Application Fee</h3>
                        <p class="text-slate-500 text-[15px] leading-relaxed">Transparency with zero unnecessary costs. Your money works for you from day one with no hidden charges.</p>
                        <div class="mt-6 inline-flex items-center gap-2 text-blue-500 text-[13px] font-medium"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                    </div>
                </div>
                
                <div class="card valorant-border text-center p-10 relative border-none transition-all bg-white rounded-2xl overflow-hidden cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0">
                    <div class="relative z-10">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="1.5"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><path d="M12 8v8"/><path d="M8 12h8"/></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-3 text-slate-800">Low-Interest Loans</h3>
                        <p class="text-slate-500 text-[15px] leading-relaxed">Flexible repayment terms for lasting financial freedom and growth. Competitive rates designed for your success.</p>
                        <div class="mt-6 inline-flex items-center gap-2 text-blue-500 text-[13px] font-medium"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center gap-10 flex-wrap mt-14 pt-5">
                <div class="flex items-center gap-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span class="text-slate-500 text-sm">10,000+ Happy Clients</span></div>
                <div class="flex items-center gap-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span class="text-slate-500 text-sm">24/7 Customer Support</span></div>
                <div class="flex items-center gap-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><span class="text-slate-500 text-sm">4.92 Trust Score</span></div>
            </div>
        </div>
    </div>

    <!-- FAQs Section -->
    <div class="w-full py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="grid md:grid-cols-2 gap-16">
                <div class="valorant-border rounded-3xl p-8">
                    <h2 class="font-grotesk text-[48px] font-bold mb-5">What customers ask about</h2>
                    <p class="text-slate-500 mb-8">Everything about BizCashAndCapital and how we help your business thrive.</p>
                    <a href="tel:+12166470007" class="border border-slate-300 hover:border-slate-800 transition-all px-8 py-3 rounded-full text-sm font-medium inline-block text-slate-800">+1 (216) 647-0007 →</a>
                </div>
                <div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>What is BizCashAndCapital?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">We're a leading provider of business loans, specializing in low-credit solutions and fast funding.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>How does BizCashAndCapital work?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Streamlined online application, holistic review, and funding within days.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>No worries about a bad credit score?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Correct. We specialize in loans for businesses with low credit scores.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-b border-slate-200 py-6 cursor-pointer" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>What are the criteria for loan application?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Minimum 6 months in business. Simple documentation required.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="w-full py-20 bg-slate-900 relative overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/start-your-application.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/85 to-slate-800/90 z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border text-center rounded-3xl p-16 bg-slate-800/40 backdrop-blur-sm">
                <h2 class="font-grotesk text-[clamp(42px,6vw,72px)] font-bold text-white mb-6">Start your application</h2>
                <div class="font-grotesk text-sm text-slate-300 mb-10">( No fee to apply. Ready? )</div>
                <div class="flex gap-5 justify-center flex-wrap">
                    <a href="mailto:info@bizcashandcapital.com" class="bg-white text-slate-800 px-10 py-4 rounded-full text-sm font-bold transition-all hover:bg-slate-100">info@bizcashandcapital.com</a>
                    <a href="tel:+12166470007" class="border border-white text-white px-10 py-4 rounded-full text-sm font-bold transition-all hover:bg-white/10">+1 (216) 647-0007</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="w-full border-t border-slate-200 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <footer class="py-12 text-center text-slate-500 text-[13px]">
                <div class="font-grotesk text-xl font-semibold mb-6">BizCash&Capital</div>
                <div class="flex justify-center gap-8 flex-wrap mb-8">
                    <a href="#" class="text-slate-500 hover:text-slate-800 transition-colors no-underline text-sm">About</a>
                    <a href="#" class="text-slate-500 hover:text-slate-800 transition-colors no-underline text-sm">Services</a>
                    <a href="#" class="text-slate-500 hover:text-slate-800 transition-colors no-underline text-sm">Contact</a>
                    <a href="#" class="text-slate-500 hover:text-slate-800 transition-colors no-underline text-sm">Privacy</a>
                </div>
                <p>© BizCashAndCapital, 2025 — Mon–Sat, 8am–6pm</p>
                <p class="mt-3 text-xs">bizcashandcapital.com</p>
            </footer>
        </div>
    </div>

    <script>
        function toggleFaq(element) {
            const isOpen = element.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('open');
                const toggle = item.querySelector('.faq-toggle');
                if (toggle) toggle.textContent = '+';
            });
            if (!isOpen) {
                element.classList.add('open');
                const toggle = element.querySelector('.faq-toggle');
                if (toggle) toggle.textContent = '−';
            }
        }
    </script>
</body>

</html>