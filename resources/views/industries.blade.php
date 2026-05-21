<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BizCashAndCapital — Business Loans for Every Industry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-light': '#34d399',
                        'emerald-card': '#1a7a4a',
                        'lime-accent': '#c8e86a',
                    }
                }
            }
        }
    </script>

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border-radius: 0 !important;
        }

        :root {
            --bg: #eef6ee;
            --emerald: #1a7a4a;
            --emerald-dark: #155f3a;
            --lime: #c8e86a;
            --lime-dark: #b8d858;
            --ink: #111a13;
            --gray: #6b7280;
            --gray-lt: #9ca3af;
            --card-bg: #ffffff;
            --border: #e2ece2;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--ink);
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #e2ece2;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--emerald);
        }

        .v-border {
            position: relative;
            transition: all 0.25s ease;
        }

        .v-border::before {
            content: '';
            position: absolute;
            inset: -1.5px;
            background: linear-gradient(135deg, var(--emerald) 0%, transparent 40%, var(--lime) 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.35s ease;
        }

        .v-border:hover::before {
            opacity: 0.7;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        @keyframes pulse-dot {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-marquee {
            animation: marquee 28s linear infinite;
        }

        .animate-float {
            animation: float 5s ease-in-out infinite;
        }

        .animate-pulse-dot {
            animation: pulse-dot 2s ease-in-out infinite;
        }

        .sr {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(.2, .9, .4, 1.1), transform 0.8s cubic-bezier(.2, .9, .4, 1.1);
        }

        .sr-l {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s cubic-bezier(.2, .9, .4, 1.1), transform 0.8s cubic-bezier(.2, .9, .4, 1.1);
        }

        .sr-r {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.8s cubic-bezier(.2, .9, .4, 1.1), transform 0.8s cubic-bezier(.2, .9, .4, 1.1);
        }

        .sr-s {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .sr.vis,
        .sr-l.vis,
        .sr-r.vis,
        .sr-s.vis {
            opacity: 1;
            transform: none;
        }

        .lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .lift:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 48px -12px rgba(26, 122, 74, 0.2);
        }

        .ind-card {
            overflow: hidden;
            transition: all 0.35s ease;
            border: 1px solid var(--border);
            background: white;
        }

        .ind-card:hover {
            border-color: var(--emerald);
            box-shadow: 0 20px 40px -12px rgba(26, 122, 74, 0.2);
            transform: translateY(-6px);
        }

        .ind-card img {
            transition: transform 0.5s ease;
            filter: grayscale(40%) contrast(1.05);
        }

        .ind-card:hover img {
            transform: scale(1.08);
            filter: grayscale(0%) contrast(1);
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background: rgba(238, 246, 238, 0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            transition: all 0.3s;
        }

        nav.scrolled {
            border-bottom-color: var(--emerald);
        }

        .g-text {
            background: linear-gradient(135deg, var(--emerald), var(--emerald-dark), var(--lime));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .shine-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, var(--emerald), var(--emerald-dark));
        }

        .shine-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: -200%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.25), transparent);
            transition: left 0.5s ease;
        }

        .shine-btn:hover::after {
            left: 200%;
        }

        .corner-tl::before,
        .corner-br::after {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            border-color: var(--emerald);
        }

        .corner-tl::before {
            top: -1px;
            left: -1px;
            border-top: 2px solid;
            border-left: 2px solid;
        }

        .corner-br::after {
            bottom: -1px;
            right: -1px;
            border-bottom: 2px solid;
            border-right: 2px solid;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(26, 122, 74, 0.3);
            background: rgba(26, 122, 74, 0.08);
            padding: 5px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--emerald);
        }

        .tag span {
            width: 6px;
            height: 6px;
            background: var(--emerald);
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        .tag-dark {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            padding: 5px 14px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.9);
        }

        .tag-dark span {
            width: 6px;
            height: 6px;
            background: var(--lime);
            display: inline-block;
            animation: pulse-dot 2s infinite;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border);
            background: #fff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            color: var(--ink);
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--emerald);
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.08);
        }

        .faq-item {
            border: 1px solid var(--border);
            background: #fff;
            transition: all 0.3s;
            cursor: pointer;
        }

        .faq-item:hover {
            border-color: var(--emerald);
        }

        .faq-item.open {
            border-color: var(--emerald);
            background: #f9fef7;
        }

        .faq-item.open .faq-toggle {
            background: var(--emerald);
            border-color: var(--emerald);
            color: #fff;
            transform: rotate(45deg);
        }

        .faq-answer {
            display: none;
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        .lime-pattern {
            background: radial-gradient(circle at 20% 35%, rgba(200, 232, 106, 0.15) 2px, transparent 2px);
            background-size: 28px 28px;
        }

        .stat-divider-custom {
            width: 1px;
            background: var(--border);
        }

        @media (max-width: 768px) {
            .stat-divider-custom {
                display: none;
            }
        }
    </style>
</head>


@include('header')

<body>

<!-- HERO SECTION - REDESIGNED WITH BACKGROUND IMAGE & INDUSTRIES FOCUS (60% HEIGHT) -->
<section class="relative h-[60vh] min-h-[500px] flex items-center justify-center pt-16 overflow-hidden">
    <!-- Full Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1920&h=1080&fit=crop"
            alt="Business team collaborating"
            class="w-full h-full object-cover">
        <!-- Dark gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-black/50 to-emerald-900/50 z-10"></div>
        <!-- Subtle pattern overlay -->
        <div class="absolute inset-0 opacity-10 z-10" style="background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>

    <!-- Content Container -->
    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 w-full text-center">

        <!-- Main Headline - INDUSTRIES -->
        <div class="sr-s">
            <div class="inline-flex items-center justify-center mb-6">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 px-4 py-1.5">
                    <span class="text-[11px] font-semibold text-white/80 tracking-wider">WE FUND EVERY SECTOR</span>
                </div>
            </div>

            <h1 class="font-jakarta text-[clamp(56px,8vw,120px)] leading-[1.05] tracking-tight text-white mb-6">
                Industries
            </h1>

            <div class="w-24 h-1 bg-gradient-to-r from-lime-400 to-emerald-500 mx-auto mb-8"></div>

        </div>
    </div>
</section>
    <!-- MARQUEE -->
    <div class="bg-slate-900 py-4 overflow-hidden border-y border-emerald-500/20">
        <div class="flex gap-12 animate-marquee whitespace-nowrap pl-6">
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">BUSINESS LOANS</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">FAST FUNDING</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">NO APPLICATION FEE</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">BAD CREDIT WELCOME</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">SBA & COMMERCIAL</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">LOW INTEREST RATES</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">TRUSTED BY 10,000+</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">BUSINESS LOANS</span><span class="text-lime-400">✦</span>
            <span class="font-jakarta font-bold text-white text-sm tracking-wider">FAST FUNDING</span><span class="text-lime-400">✦</span>
        </div>
    </div>

<!-- PROCESS SECTION - REDESIGNED WITH IMAGE LEFT & CONTENT RIGHT (NO ICONS) -->
<section id="about" class="py-24 px-6 bg-white relative overflow-hidden lime-pattern">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- LEFT SIDE - Large Image -->
            <div class="sr-l relative">
                <div class="relative rounded-none overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" 
                         alt="Business team discussing strategy" 
                         class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-emerald-900/20 to-transparent"></div>
                    <!-- Corner accent -->
                    <div class="absolute top-6 left-6 w-16 h-16 border-t-2 border-l-2 border-emerald-500"></div>
                    <div class="absolute bottom-6 right-6 w-16 h-16 border-b-2 border-r-2 border-emerald-500"></div>
                </div>
                
                <!-- Floating stat card overlay -->
                <div class="absolute -bottom-6 -right-6 bg-white shadow-xl p-4 border-l-4 border-emerald-500 hidden md:block">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-emerald-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500">Approval Rate</p>
                            <p class="text-2xl font-bold text-emerald-600">96%</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- RIGHT SIDE - Content (No Icons) -->
            <div class="sr-r">
                <!-- Tag -->
                <div class="inline-flex items-center gap-2 bg-emerald-100 px-4 py-1.5 mb-6">
                    <span class="w-2 h-2 bg-emerald-500 animate-pulse"></span>
                    <span class="text-[11px] font-semibold text-emerald-700 tracking-wider">02 · OUR PROCESS</span>
                </div>
                
                <!-- Heading -->
                <h2 class="font-jakarta text-4xl md:text-5xl font-extrabold tracking-tight text-slate-800 mb-4">
                    Our Tailored Approach<br>to Funding
                </h2>
                <div class="w-20 h-0.5 bg-gradient-to-r from-emerald-500 to-lime-500 mb-6"></div>
                <p class="text-slate-500 text-[15px] leading-relaxed mb-8">
                    What sets BizCashAndCapital apart is our commitment to understanding your unique business needs. We believe in the power of tailored funding solutions. No matter your industry, our experienced financial advisors will work closely with you.
                </p>
                
                <!-- Process Steps - Vertical List (No Icons) -->
                <div class="space-y-6">
                    <!-- Step 1 -->
                    <div class="group hover:translate-x-2 transition-all duration-300">
                        <h3 class="font-jakarta font-bold text-slate-800 text-lg mb-1">01. Explore Loan Types</h3>
                        <p class="text-slate-500 text-sm">SBA loans, business loans, commercial loans tailored to you</p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="group hover:translate-x-2 transition-all duration-300">
                        <h3 class="font-jakarta font-bold text-slate-800 text-lg mb-1">02. Guide Through Process</h3>
                        <p class="text-slate-500 text-sm">Step-by-step application assistance every step of the way</p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="group hover:translate-x-2 transition-all duration-300">
                        <h3 class="font-jakarta font-bold text-slate-800 text-lg mb-1">03. Documentation Support</h3>
                        <p class="text-slate-500 text-sm">Assist in assembling all necessary paperwork</p>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="group hover:translate-x-2 transition-all duration-300">
                        <h3 class="font-jakarta font-bold text-slate-800 text-lg mb-1">04. Expert Insights</h3>
                        <p class="text-slate-500 text-sm">Address your questions and provide strategic guidance</p>
                    </div>
                </div>
                
                <!-- CTA Link -->
                <div class="mt-8 pt-4">
                    <a href="#contact" class="inline-flex items-center gap-2 text-emerald-600 font-semibold text-sm group hover:gap-3 transition-all duration-300">
                        <span>Learn more about our process</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Stats Row - Below both sections -->
        <div class="flex flex-wrap justify-between items-center mt-16 border border-slate-200 bg-slate-50/80 py-6 px-8 sr">
            <div class="text-center flex-1 group hover:scale-105 transition-transform duration-300">
                <div class="font-jakarta text-3xl font-black text-emerald-600">10,000+</div>
                <div class="text-slate-500 text-xs uppercase tracking-wide">Happy Clients</div>
            </div>
            <div class="stat-divider-custom h-12"></div>
            <div class="text-center flex-1 group hover:scale-105 transition-transform duration-300">
                <div class="font-jakarta text-3xl font-black text-emerald-600">24/7</div>
                <div class="text-slate-500 text-xs uppercase tracking-wide">Support</div>
            </div>
            <div class="stat-divider-custom h-12"></div>
            <div class="text-center flex-1 group hover:scale-105 transition-transform duration-300">
                <div class="font-jakarta text-3xl font-black text-emerald-600">4.92</div>
                <div class="text-slate-500 text-xs uppercase tracking-wide">Trust Score</div>
            </div>
            <div class="stat-divider-custom h-12"></div>
            <div class="text-center flex-1 group hover:scale-105 transition-transform duration-300">
                <div class="font-jakarta text-3xl font-black text-emerald-600">$500K</div>
                <div class="text-slate-500 text-xs uppercase tracking-wide">Max Funding</div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(0.95); }
    }
    
    .animate-pulse {
        animation: pulse 2s ease-in-out infinite;
    }
    
    .stat-divider-custom {
        width: 1px;
        background: #e2e8f0;
        height: 48px;
    }
    
    @media (max-width: 768px) {
        .stat-divider-custom {
            display: none;
        }
    }
</style>

<!-- INDUSTRIES SECTION - FULL CARD BACKGROUND IMAGES WITH SHORT TEXT -->
<section id="industries" class="py-24 px-6 bg-slate-50 relative overflow-hidden lime-pattern">
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-16 sr">
            <div class="tag mb-5"><span></span>03 · Industries We Serve</div>
            <h2 class="font-jakarta text-4xl md:text-5xl font-extrabold tracking-tight text-slate-800 mb-4">Funding Solutions for Every Business</h2>
            <p class="text-slate-500 max-w-2xl mx-auto text-[15px]">No matter your industry, our experienced financial advisors will work closely with you to secure the capital you need</p>
        </div>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Card 1 - Auto Repair -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">01</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Auto Repair</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Modern diagnostic equipment, skilled technicians, and service expansion funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 - Daycare -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1600&q=80" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">02</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Daycare</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Hiring qualified staff, safety measures, and capacity expansion funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 - Cleaning Business -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">03</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Cleaning Business</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Advanced cleaning machinery, personnel, and client base expansion.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 - Beauty Salon -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">04</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Beauty Salon</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Equipment upgrades, renovations, and marketing initiatives funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 - Convenience Store -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">05</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Convenience Store</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Store expansion, inventory stocking, and facility upgrades funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 - Construction Company -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">06</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Construction Company</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Equipment, materials, and manpower for commercial/residential projects.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 7 - Attorney Firm -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1600&q=80" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">07</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Attorney Firm</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Case expenses, technology investments, and practice expansion funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Card 8 - Accounting Firm -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[350px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-end">
                    <div>
                        <div class="inline-block bg-emerald-600 text-white text-xs font-bold px-3 py-1.5 mb-3">08</div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Accounting Firm</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4 line-clamp-2">Team expansion, software upgrades, and practice growth funding.</p>
                        <a href="#contact" class="inline-flex items-center gap-1 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                            Learn More
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* For browsers that don't support line-clamp, add fallback */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<!-- LOAN SERVICES - FULL CARD BACKGROUND IMAGES WITH TEXT OVERLAY -->
<section id="services" class="py-24 px-6 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 sr">
            <div class="tag mb-5"><span></span>04 · Loan Solutions</div>
            <h2 class="font-jakarta text-4xl md:text-5xl font-extrabold tracking-tight text-slate-800 mb-4">All loan solutions</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-[15px]">Choose the perfect financing option for your business needs</p>
        </div>

        <!-- 4 Cards in 1 Row - Full Image Background -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

            <!-- Card 1 - Business Loan (Full Image Background) -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[400px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                    <div>
                        <div class="inline-block bg-emerald-500 text-white text-xs font-bold px-3 py-1.5">01</div>
                    </div>
                    <div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Business Loan</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Expand & grow your business with flexible capital solutions tailored to your needs.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-lime-300 text-xs font-semibold">$10K – $500K</span>
                            <a href="#contact" class="inline-flex items-center gap-1.5 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                                Apply
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Commercial Loan (Full Image Background) -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[400px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                    <div>
                        <div class="inline-block bg-emerald-500 text-white text-xs font-bold px-3 py-1.5">02</div>
                    </div>
                    <div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Commercial Loan</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Real estate & equipment financing for your commercial property and assets.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-lime-300 text-xs font-semibold">Up to $5M</span>
                            <a href="#contact" class="inline-flex items-center gap-1.5 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                                Apply
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 - SBA Loan (Full Image Background) -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[400px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                    <div>
                        <div class="inline-block bg-emerald-500 text-white text-xs font-bold px-3 py-1.5">03</div>
                    </div>
                    <div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">SBA Loan</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Government-backed funding for small businesses with competitive rates.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-lime-300 text-xs font-semibold">Low Rates</span>
                            <a href="#contact" class="inline-flex items-center gap-1.5 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                                Apply
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 - Construction Loan (Full Image Background) -->
            <div class="group relative rounded-none overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sr h-[400px]">
                <div class="absolute inset-0 z-0">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=500&fit=crop" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/50 to-black/20"></div>
                </div>
                <div class="relative z-10 p-6 h-full flex flex-col justify-between">
                    <div>
                        <div class="inline-block bg-emerald-500 text-white text-xs font-bold px-3 py-1.5">04</div>
                    </div>
                    <div>
                        <h3 class="font-jakarta font-bold text-white text-2xl mb-2">Construction Loan</h3>
                        <p class="text-white/80 text-sm leading-relaxed mb-4">Build your vision with specialized construction financing and interest-only payments.</p>
                        <div class="flex items-center justify-between pt-3 border-t border-white/20">
                            <span class="text-lime-300 text-xs font-semibold">Interest Only</span>
                            <a href="#contact" class="inline-flex items-center gap-1.5 text-lime-300 text-sm font-semibold group-hover:gap-2 transition-all duration-300 hover:text-white">
                                Apply
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-10 sr">
            <a href="#contact" class="inline-flex items-center gap-2 border-2 border-emerald-600 text-emerald-600 px-8 py-3.5 font-semibold text-sm transition-all duration-300 hover:bg-emerald-600 hover:text-white group">
                <span>View all loan options</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="group-hover:translate-x-1 transition-transform">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

    <!-- JOURNEY SECTION -->
    <section class="relative py-24 px-6 overflow-hidden">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/check.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/92 to-slate-800/88 z-10"></div>
        <div class="max-w-7xl mx-auto relative z-20">
            <div class="border border-white/10 bg-white/5 backdrop-blur-sm p-12 sr-s">
                <div class="mb-8 flex gap-3 flex-wrap">
                    <div class="tag-dark"><span></span>05 · Your Journey</div>
                    <div class="tag-dark"><span></span>Our Mission</div>
                </div>
                <h2 class="font-jakarta text-[clamp(42px,7vw,86px)] text-white leading-[1.05] tracking-tight mb-6">Your Journey Toward<br>Financial Success Begins Here</h2>
                <div class="text-white/80 text-sm mb-10 italic">( full cycle financial partner )</div>
                <div class="grid md:grid-cols-2 gap-10 mb-10">
                    <p class="text-white/80 text-[15px] leading-relaxed">At BizCashAndCapital, we are dedicated to your business's prosperity. We understand the unique challenges of various industries and tailor our support to suit your specific needs. Our vision is to be your partner in realizing your business dreams, whether that means expanding your beauty salon, strengthening your attorney firm, or growing your convenience store.</p>
                    <p class="text-white/80 text-[15px] leading-relaxed">Unlock the doors to financial freedom by contacting us today. Let's explore the funding options that will take your business to new heights. Your success is our success, and together, we can build a brighter future for your business.</p>
                </div>
                <div class="flex gap-4 flex-wrap">
                    <a href="tel:+12166470007" class="bg-white text-slate-800 px-8 py-3.5 font-semibold text-sm hover:bg-emerald-500 hover:text-white transition-all duration-300">Call to Our Experts →</a>
                    <a href="#contact" class="border border-white/30 text-white px-8 py-3.5 font-semibold text-sm hover:bg-white/10 hover:border-white/50 transition">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- LOAN CALCULATOR -->
    <section class="py-24 px-6 bg-slate-50 relative overflow-hidden lime-pattern">
        <div class="max-w-5xl mx-auto relative z-10">
            <div class="text-center mb-12 sr">
                <div class="tag mb-5"><span></span>06 · Loan Calculator</div>
                <h2 class="font-jakarta text-4xl md:text-5xl font-extrabold tracking-tight text-slate-800 mb-4">How much do you need?</h2>
                <p class="text-slate-500 text-[15px]">Use the sliders to estimate your monthly payments</p>
            </div>
            <div class="border border-slate-200 bg-white overflow-hidden shadow-xl sr-s">
                <div class="grid md:grid-cols-2">
                    <div class="p-8 md:p-10 bg-gradient-to-br from-slate-50 to-white">
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between text-sm mb-3"><span class="text-slate-600 font-medium">Loan Amount</span><span class="text-emerald-600 font-bold font-jakarta" id="amountVal">$25,000</span></div><input type="range" id="loanAmountSlider" min="1000" max="500000" step="1000" value="25000" class="w-full h-1.5 bg-slate-200 accent-emerald-500">
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-3"><span class="text-slate-600 font-medium">Duration (months)</span><span class="text-emerald-600 font-bold font-jakarta" id="durationVal">24 months</span></div><input type="range" id="durationSlider" min="6" max="60" step="1" value="24" class="w-full h-1.5 bg-slate-200 accent-emerald-500">
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-3"><span class="text-slate-600 font-medium">Interest Rate</span><span class="text-emerald-600 font-bold font-jakarta" id="rateVal">6.9%</span></div><input type="range" id="rateSlider" min="4.9" max="24.9" step="0.1" value="6.9" class="w-full h-1.5 bg-slate-200 accent-emerald-500">
                            </div>
                        </div>
                    </div>
                    <div class="p-8 md:p-10 bg-gradient-to-br from-emerald-600 to-emerald-700 text-white">
                        <p class="text-emerald-100 text-sm mb-2 uppercase tracking-widest font-semibold">Monthly Payment</p>
                        <p class="font-jakarta text-5xl md:text-6xl font-extrabold mb-8" id="monthlyResult">$1,134</p>
                        <div class="grid grid-cols-2 gap-3 mb-8">
                            <div class="bg-white/10 p-4 border border-white/10">
                                <p class="text-emerald-200 text-xs mb-1">Total Interest</p>
                                <p class="font-jakarta font-bold text-lg" id="totalInterest">$2,216</p>
                            </div>
                            <div class="bg-white/10 p-4 border border-white/10">
                                <p class="text-emerald-200 text-xs mb-1">Total Payment</p>
                                <p class="font-jakarta font-bold text-lg" id="totalPayment">$27,216</p>
                            </div>
                        </div><a href="#contact" class="block w-full text-center bg-white text-emerald-700 py-3.5 font-bold text-sm hover:bg-emerald-50 transition mb-3">Apply Now →</a>
                        <p class="text-center text-emerald-200 text-xs">No credit check for pre-qualification</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('application')

    <footer class="bg-slate-900 text-white pt-16 pb-8 px-6 border-t border-white/5">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-5 gap-8 mb-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-emerald-600 flex items-center justify-center"><span class="text-white font-bold text-sm font-jakarta">B</span></div><span class="font-jakarta font-bold text-lg">BizCash&Capital</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-5">Your trusted partner for unlocking the financial resources your business needs to thrive and grow.</p>
                </div>
                <div>
                    <h4 class="font-jakarta font-bold mb-4 text-sm uppercase">Links</h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li><a href="#about" class="hover:text-emerald-400 transition">About Us</a></li>
                        <li><a href="#services" class="hover:text-emerald-400 transition">Loan Services</a></li>
                        <li><a href="#industries" class="hover:text-emerald-400 transition">Industries</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-jakarta font-bold mb-4 text-sm uppercase">Legal</h4>
                    <ul class="space-y-2 text-slate-400 text-sm">
                        <li><a href="#" class="hover:text-emerald-400 transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-jakarta font-bold mb-4 text-sm uppercase">Open Hours</h4>
                    <p class="text-slate-400 text-sm">Mon – Sat: 8am – 6pm<br>Sunday: Closed</p>
                    <div class="mt-4">
                        <p class="text-slate-400 text-sm">📞 <a href="tel:+12166470007" class="hover:text-emerald-400">+1 (216) 647-0007</a></p>
                        <p class="text-slate-400 text-sm">✉️ <a href="mailto:info@bizcashandcapital.com" class="hover:text-emerald-400">info@bizcashandcapital.com</a></p>
                    </div>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-slate-500 text-sm">© All Copyright 2025 by BizCashandCapital.com</div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
        const revealEls = document.querySelectorAll('.sr, .sr-l, .sr-r, .sr-s');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('vis');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -40px 0px'
        });
        revealEls.forEach(el => revealObserver.observe(el));

        const amountSlider = document.getElementById('loanAmountSlider'),
            durationSlider = document.getElementById('durationSlider'),
            rateSlider = document.getElementById('rateSlider');
        const amountVal = document.getElementById('amountVal'),
            durationVal = document.getElementById('durationVal'),
            rateVal = document.getElementById('rateVal');
        const monthlyResult = document.getElementById('monthlyResult'),
            totalInterest = document.getElementById('totalInterest'),
            totalPayment = document.getElementById('totalPayment');

        function calculateLoan() {
            const p = +amountSlider.value,
                m = +durationSlider.value,
                ar = +rateSlider.value,
                mr = ar / 100 / 12;
            amountVal.textContent = '$' + p.toLocaleString();
            durationVal.textContent = m + ' months';
            rateVal.textContent = ar.toFixed(1) + '%';
            let monthly = mr === 0 ? p / m : p * mr * Math.pow(1 + mr, m) / (Math.pow(1 + mr, m) - 1);
            const total = monthly * m,
                interest = total - p;
            monthlyResult.textContent = '$' + Math.round(monthly).toLocaleString();
            totalInterest.textContent = '$' + Math.round(interest).toLocaleString();
            totalPayment.textContent = '$' + Math.round(total).toLocaleString();
        }
        amountSlider.addEventListener('input', calculateLoan);
        durationSlider.addEventListener('input', calculateLoan);
        rateSlider.addEventListener('input', calculateLoan);
        calculateLoan();

        function toggleFaq(element) {
            const isOpen = element.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('open');
                const t = item.querySelector('.faq-toggle');
                if (t) t.textContent = '+';
            });
            if (!isOpen) {
                element.classList.add('open');
                const t = element.querySelector('.faq-toggle');
                if (t) t.textContent = '−';
            }
        }

        function handleSubmit(btn) {
            btn.textContent = 'Submitting...';
            btn.disabled = true;
            setTimeout(() => {
                btn.textContent = '✓ Request Sent!';
                btn.style.background = '#059669';
                setTimeout(() => {
                    btn.textContent = 'Submit Request →';
                    btn.style.background = '';
                    btn.disabled = false;
                }, 3000);
            }, 1200);
        }
    </script>
</body>

</html>