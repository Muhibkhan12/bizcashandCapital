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
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-light': '#34d399',
                        'green-soft': '#ecfdf5',
                    },
                    animation: {
                        'pulse-slow': 'pulse 2s infinite',
                        'scroll-anim': 'scrollAnim 2s infinite',
                        'marquee': 'marquee 25s linear infinite',
                        'fade-up': 'fadeUp 0.8s ease-out forwards',
                        'fade-in': 'fadeIn 0.6s ease-out forwards',
                        'slide-in-left': 'slideInLeft 0.7s ease-out forwards',
                        'slide-in-right': 'slideInRight 0.7s ease-out forwards',
                        'float': 'float 4s ease-in-out infinite',
                        'float-delayed': 'float 5s ease-in-out infinite 1s',
                        'glow-pulse': 'glowPulse 3s ease-in-out infinite',
                    },
                    keyframes: {
                        scrollAnim: {
                            '0%': { opacity: '1', transform: 'translateX(-50%) translateY(0)' },
                            '100%': { opacity: '0', transform: 'translateX(-50%) translateY(15px)' },
                        },
                        marquee: {
                            'from': { transform: 'translateX(0)' },
                            'to': { transform: 'translateX(-50%)' },
                        },
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(50px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        glowPulse: {
                            '0%, 100%': { boxShadow: '0 0 5px rgba(16,185,129,0.3)' },
                            '50%': { boxShadow: '0 0 20px rgba(16,185,129,0.6)' },
                        },
                    }
                }
            }
        }
    </script>

    <style>
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

        .animate-pulse-custom { animation: pulse 2s infinite; }
        .animate-scroll { animation: scrollAnim 2s infinite; }
        .animate-marquee { animation: marquee 25s linear infinite; }

        /* Green Theme Border Style */
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
            background: linear-gradient(135deg, #10b981 0%, #059669 25%, transparent 50%, #10b981 75%, #059669 100%);
            border-radius: inherit;
            z-index: -1;
            opacity: 0.4;
            transition: opacity 0.3s ease;
        }

        .valorant-border:hover::before {
            opacity: 0.8;
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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #10b981; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #059669; }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15); }
        .card-img-zoom { transition: transform 0.5s ease; }
        .card-img-zoom:hover { transform: scale(1.05); }
    </style>
</head>

<body class="font-inter bg-slate-50 text-slate-900 overflow-x-hidden">

    @include('header');

    <!-- HERO Section - Clean Left-Aligned Design -->
    <div class="relative overflow-hidden min-h-screen pt-16">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/check.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black/40 to-black/20 z-10"></div>

        <div class="relative z-20 h-screen flex items-center max-w-7xl mx-auto px-12 lg:px-16">
            <div class="w-full max-w-3xl opacity-0 animate-fade-up delay-200">
                <h1 class="font-grotesk text-[clamp(48px,7vw,88px)] font-normal leading-[1.1] tracking-tight text-white mb-8">
                    best business<br>
                    <span class="text-green-400">loan</span>
                    low credit score
                </h1>
                <p class="text-base font-normal text-white/70 max-w-xl mb-10 leading-relaxed">
                    Fast, flexible loans for entrepreneurs with low credit scores. No hidden fees, no endless paperwork.
                </p>
                <div class="flex gap-4 items-center flex-wrap">
                    <a href="#apply" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 font-medium text-sm rounded-full transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-green-500/30">Get funding →</a>
                    <a href="tel:+12166470007" class="bg-transparent text-white px-7 py-3 font-normal text-sm rounded-full border border-white/30 hover:border-white/50 hover:bg-white/10 transition-all duration-300">+1 (216) 647-0007</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Marquee -->
    <div class="bg-slate-800 py-5 overflow-hidden whitespace-nowrap w-full">
        <div class="inline-flex gap-12 animate-marquee pl-6">
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">BUSINESS LOANS</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">FAST FUNDING</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">NO APPLICATION FEE</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">LOW INTEREST RATES</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">BAD CREDIT WELCOME</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">SBA & COMMERCIAL</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">BUSINESS LOANS</span> <span class="text-white/50">✦</span>
            <span class="font-bold text-white hover:text-green-400 transition-colors duration-300">FAST FUNDING</span> <span class="text-white/50">✦</span>
        </div>
    </div>

    <!-- Get Started Section - Light Green Theme -->
    <div id="apply" class="w-full py-24 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-green-500/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-16 opacity-0 animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-medium text-green-600 mb-5 border border-green-200/50 shadow-sm">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Simple & Transparent
                </div>
                <h2 class="font-grotesk text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 text-slate-800">
                    Start your journey <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">in minutes</span>
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-base leading-relaxed">With our personalized small business loans, achieve financial freedom while fueling your business growth. No hidden fees, no surprises.</p>
            </div>

            <!-- Feature Cards - Green Theme -->
            <div class="grid md:grid-cols-3 gap-6 mb-20">
                <div class="group bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 opacity-0 animate-fade-up delay-100">
                    <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">No Application Fee</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Zero hidden fees. Transparent process from start to finish. What you see is what you get.</p>
                </div>
                <div class="group bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 opacity-0 animate-fade-up delay-200">
                    <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Quick Funding</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Approved in days, funded within a week. Streamlined evaluation process designed for speed.</p>
                </div>
                <div class="group bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 opacity-0 animate-fade-up delay-300">
                    <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            <path d="M12 8v8" /><path d="M8 12h8" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Low Interest Rates</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Flexible terms tailored to your cash flow. Competitive rates designed for your success.</p>
                </div>
            </div>

            <!-- Loan Calculator - Green Theme -->
            <div class="relative mb-20 opacity-0 animate-fade-up delay-400">
                <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-500/10 rounded-3xl blur-2xl"></div>
                <div class="relative bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="p-8 md:p-10 bg-gradient-to-br from-slate-50 to-white">
                            <div class="inline-flex items-center gap-2 bg-green-50 px-3 py-1 rounded-full text-xs font-medium text-green-600 mb-4">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Instant Calculator
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800 mb-2">How much do you need?</h3>
                            <p class="text-slate-500 text-sm mb-6">Use the sliders to estimate your monthly payments</p>
                            <div class="space-y-6">
                                <div><div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Loan Amount</span><span class="text-green-600 font-semibold" id="amountVal">$25,000</span></div>
                                <input type="range" id="loanAmountSlider" min="1000" max="100000" step="1000" value="25000" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-green-500"></div>
                                <div><div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Duration (months)</span><span class="text-green-600 font-semibold" id="durationVal">24 months</span></div>
                                <input type="range" id="durationSlider" min="6" max="60" step="1" value="24" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-green-500"></div>
                                <div><div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Interest Rate</span><span class="text-green-600 font-semibold" id="rateVal">6.9%</span></div>
                                <input type="range" id="rateSlider" min="4.9" max="24.9" step="0.1" value="6.9" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-green-500"></div>
                            </div>
                        </div>
                        <div class="p-8 md:p-10 bg-gradient-to-br from-green-600 to-green-700 text-white">
                            <div class="text-center mb-6"><p class="text-green-100 text-sm mb-2">Your estimated monthly payment</p><p class="text-5xl md:text-6xl font-bold" id="monthlyResult">$1,134</p></div>
                            <div class="grid grid-cols-2 gap-4 text-center mb-6">
                                <div class="bg-white/10 rounded-xl p-3"><p class="text-green-100 text-xs">Total Interest</p><p class="text-lg font-semibold" id="totalInterest">$2,216</p></div>
                                <div class="bg-white/10 rounded-xl p-3"><p class="text-green-100 text-xs">Total Payment</p><p class="text-lg font-semibold" id="totalPayment">$27,216</p></div>
                            </div>
                            <a href="#" class="block w-full text-center bg-white text-green-600 py-3 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300 hover:scale-[1.02]">Apply Now →</a>
                            <p class="text-center text-green-200 text-xs mt-3">No credit check for pre-qualification</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats row - Green Theme -->
            <div class="grid md:grid-cols-3 gap-5">
                <div class="bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 opacity-0 animate-fade-up delay-100">
                    <div class="text-4xl font-bold font-grotesk text-green-600 mb-2">3,000+</div>
                    <div class="text-slate-500 text-sm">applications processed</div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-transparent mx-auto mt-4"></div>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 opacity-0 animate-fade-up delay-200">
                    <div class="text-4xl font-bold font-grotesk text-green-600 mb-2">6+</div>
                    <div class="text-slate-500 text-sm">years of expertise</div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-transparent mx-auto mt-4"></div>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 opacity-0 animate-fade-up delay-300">
                    <div class="text-4xl font-bold font-grotesk text-green-600 mb-2">$500K</div>
                    <div class="text-slate-500 text-sm">max funding available</div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-transparent mx-auto mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const amountSlider = document.getElementById('loanAmountSlider');
        const durationSlider = document.getElementById('durationSlider');
        const rateSlider = document.getElementById('rateSlider');
        const amountVal = document.getElementById('amountVal');
        const durationVal = document.getElementById('durationVal');
        const rateVal = document.getElementById('rateVal');
        const monthlyResult = document.getElementById('monthlyResult');
        const totalInterest = document.getElementById('totalInterest');
        const totalPayment = document.getElementById('totalPayment');

        function calculateLoan() {
            const principal = parseFloat(amountSlider.value);
            const months = parseFloat(durationSlider.value);
            const annualRate = parseFloat(rateSlider.value);
            const monthlyRate = annualRate / 100 / 12;
            amountVal.textContent = `$${principal.toLocaleString()}`;
            durationVal.textContent = `${months} months`;
            rateVal.textContent = `${annualRate}%`;
            let monthly;
            if (monthlyRate === 0) { monthly = principal / months; } 
            else { monthly = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1); }
            const total = monthly * months;
            const interest = total - principal;
            monthlyResult.textContent = `$${Math.round(monthly).toLocaleString()}`;
            totalInterest.textContent = `$${Math.round(interest).toLocaleString()}`;
            totalPayment.textContent = `$${Math.round(total).toLocaleString()}`;
        }
        amountSlider.addEventListener('input', calculateLoan);
        durationSlider.addEventListener('input', calculateLoan);
        rateSlider.addEventListener('input', calculateLoan);
        calculateLoan();
    </script>

    <!-- About Us Section - Green Theme -->
    <div class="w-full py-20 bg-slate-100 relative overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/hero-section.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/90 to-slate-800/95 z-10"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border rounded-3xl p-12 bg-white/5 backdrop-blur-sm transition-all duration-500 hover:bg-white/10 opacity-0 animate-fade-up">
                <div class="mb-6">
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold inline-block mr-2 hover:bg-white/25 transition-all duration-300">03: About Us</span>
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 rounded-full text-xs font-semibold inline-block hover:bg-white/25 transition-all duration-300">Our Mission</span>
                </div>
                <div class="font-grotesk text-[clamp(42px,8vw,90px)] font-bold leading-[1] tracking-tighter mb-8 text-white">digital driving force<br>for your business</div>
                <div class="font-grotesk text-sm text-white/70 mb-12">( full cycle financial partner )</div>
                <div class="grid md:grid-cols-2 gap-12">
                    <p class="text-[15px] leading-relaxed text-white/85 hover:text-white transition-colors duration-300">We empower businesses and ensure financial prosperity through tailored commercial loan services. Every brand gets a bespoke approach.</p>
                    <p class="text-[15px] leading-relaxed text-white/85 hover:text-white transition-colors duration-300">To build an effective strategy, we study your business, your market, and your goals in depth — then deliver the right capital solution.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Loan Services Section - Green Theme -->
    <div class="w-full py-20  from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-[70px] opacity-0 animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-green-500/10 backdrop-blur-sm px-5 py-1.5 rounded-full text-xs font-semibold text-green-600 mb-6 border border-green-500/20 hover:bg-green-500/20 transition-all duration-300">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Loan Solutions
                </div>
                <h2 class="font-grotesk text-[clamp(40px,6vw,52px)] font-bold tracking-tighter mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">All loan solutions</h2>
                <p class="text-slate-500 max-w-[520px] mx-auto text-base">Choose the perfect financing option for your business needs</p>
            </div>
            <div class="grid md:grid-cols-3 gap-7 mb-7">
                <div class="valorant-border rounded-2xl overflow-hidden transition-all duration-500 cursor-pointer bg-white hover:-translate-y-2 hover:shadow-2xl opacity-0 animate-fade-up delay-100">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110 grayscale contrast-125">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-green-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">01</div></div>
                    </div>
                    <div class="p-7"><h3 class="text-2xl font-bold mb-3 text-slate-800">Business Loan</h3><p class="text-slate-500 text-sm leading-relaxed mb-5">Expand & grow your business with flexible capital.</p><div class="text-green-500 text-[13px] font-medium flex items-center gap-1.5 group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Apply</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
                <div class="valorant-border rounded-2xl overflow-hidden transition-all duration-500 cursor-pointer bg-white hover:-translate-y-2 hover:shadow-2xl opacity-0 animate-fade-up delay-200">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110 grayscale contrast-125">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-green-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">02</div></div>
                    </div>
                    <div class="p-7"><h3 class="text-2xl font-bold mb-3 text-slate-800">Commercial Loan</h3><p class="text-slate-500 text-sm leading-relaxed mb-5">Real estate & equipment financing solutions.</p><div class="text-green-500 text-[13px] font-medium flex items-center gap-1.5 group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Apply</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
                <div class="valorant-border rounded-2xl overflow-hidden transition-all duration-500 cursor-pointer bg-white hover:-translate-y-2 hover:shadow-2xl opacity-0 animate-fade-up delay-300">
                    <div class="relative h-[220px] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=400&fit=crop" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110 grayscale contrast-125">
                        <div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-green-500/60"></div>
                        <div class="absolute top-5 left-5"><div class="bg-white/20 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white">03</div></div>
                    </div>
                    <div class="p-7"><h3 class="text-2xl font-bold mb-3 text-slate-800">SBA Loan</h3><p class="text-slate-500 text-sm leading-relaxed mb-5">Government-backed funding for small businesses.</p><div class="text-green-500 text-[13px] font-medium flex items-center gap-1.5 group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Apply</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
            </div>
            <div class="valorant-border rounded-2xl overflow-hidden transition-all duration-500 cursor-pointer bg-white hover:-translate-y-2 hover:shadow-2xl mt-0 opacity-0 animate-fade-up delay-400">
                <div class="grid md:grid-cols-[1fr,1.2fr] min-h-[280px]">
                    <div class="relative overflow-hidden"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=500&fit=crop" class="w-full h-full object-cover transition-transform duration-700 hover:scale-110 grayscale contrast-125"><div class="absolute inset-0 bg-gradient-to-br from-slate-800/70 to-green-500/60"></div><div class="absolute top-5 left-5"><div class="bg-green-500/90 backdrop-blur-md px-3.5 py-1.5 rounded-full text-xs font-semibold text-white hover:bg-green-600 transition-colors duration-300">Featured</div></div></div>
                    <div class="p-10 bg-white"><div class="text-sm font-semibold text-green-500 mb-2">04</div><h3 class="text-3xl font-bold mb-4 text-slate-800">Construction Loan</h3><p class="text-slate-500 text-[15px] leading-relaxed mb-6">Build your vision with specialized construction financing.</p><div class="flex gap-6 flex-wrap mb-7"><div><span class="font-bold text-slate-800">Interest Only</span><br><span class="text-xs text-slate-400">during construction</span></div></div><div class="inline-flex items-center gap-2 bg-slate-800 px-7 py-3 rounded-full text-white font-semibold text-sm transition-all duration-300 hover:bg-green-600 hover:scale-105 group"><span>Apply for Construction Loan</span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
            </div>
            <div class="text-center mt-12 opacity-0 animate-fade-up delay-500"><a href="#" class="border border-slate-300 hover:border-green-500 hover:bg-green-50 transition-all duration-300 px-9 py-3.5 text-sm font-semibold rounded-full inline-block text-slate-800 hover:text-green-600 hover:scale-105">View all loan options →</a></div>
        </div>
    </div>

    <!-- Why Us Section - Green Theme -->
    <div class="w-full py-20 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-[70px] opacity-0 animate-fade-up">
                <div class="inline-flex items-center gap-2 bg-green-500/10 backdrop-blur-sm px-5 py-1.5 rounded-full text-xs font-semibold text-green-600 mb-6 border border-green-500/20 hover:bg-green-500/20 transition-all duration-300">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Why Choose Us
                </div>
                <h2 class="font-grotesk text-[clamp(40px,6vw,52px)] font-bold tracking-tighter mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">Your reliable partners</h2>
                <p class="text-slate-500 max-w-[520px] mx-auto text-base">We're committed to your success with transparent, fast, and flexible loan solutions</p>
            </div>
            <div class="grid md:grid-cols-3 gap-7">
                <div class="card valorant-border text-center p-10 relative border-none transition-all duration-500 bg-white rounded-2xl overflow-hidden cursor-pointer hover:-translate-y-3 hover:shadow-2xl opacity-0 animate-fade-up delay-100">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0 transition-transform duration-700 hover:scale-110">
                    <div class="relative z-10"><div class="w-20 h-20 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6 transition-all duration-300 hover:scale-110 hover:shadow-lg"><svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="text-2xl font-bold mb-3 text-slate-800">Quick Funding</h3><p class="text-slate-500 text-[15px] leading-relaxed">Shortened approval with practical evaluation ensures fast capital when needed.</p><div class="mt-6 inline-flex items-center gap-2 text-green-500 text-[13px] font-medium group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
                <div class="card valorant-border text-center p-10 relative border-none transition-all duration-500 bg-white rounded-2xl overflow-hidden cursor-pointer hover:-translate-y-3 hover:shadow-2xl opacity-0 animate-fade-up delay-200">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0 transition-transform duration-700 hover:scale-110">
                    <div class="relative z-10"><div class="w-20 h-20 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6 transition-all duration-300 hover:scale-110 hover:shadow-lg"><svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="text-2xl font-bold mb-3 text-slate-800">No Application Fee</h3><p class="text-slate-500 text-[15px] leading-relaxed">Transparency with zero unnecessary costs. Your money works for you from day one.</p><div class="mt-6 inline-flex items-center gap-2 text-green-500 text-[13px] font-medium group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
                <div class="card valorant-border text-center p-10 relative border-none transition-all duration-500 bg-white rounded-2xl overflow-hidden cursor-pointer hover:-translate-y-3 hover:shadow-2xl opacity-0 animate-fade-up delay-300">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" class="absolute top-0 left-0 w-full h-full object-cover opacity-20 z-0 transition-transform duration-700 hover:scale-110">
                    <div class="relative z-10"><div class="w-20 h-20 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6 transition-all duration-300 hover:scale-110 hover:shadow-lg"><svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="1.5"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/><path d="M12 8v8"/><path d="M8 12h8"/></svg></div><h3 class="text-2xl font-bold mb-3 text-slate-800">Low-Interest Loans</h3><p class="text-slate-500 text-[15px] leading-relaxed">Flexible repayment terms for lasting financial freedom and growth.</p><div class="mt-6 inline-flex items-center gap-2 text-green-500 text-[13px] font-medium group cursor-pointer"><span class="group-hover:translate-x-1 transition-transform duration-300">Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform duration-300"><path d="M5 12h14M12 5l7 7-7 7"/></svg></div></div>
                </div>
            </div>
            <div class="flex justify-center gap-10 flex-wrap mt-14 pt-5 opacity-0 animate-fade-up delay-400">
                <div class="flex items-center gap-3 hover:scale-105 transition-transform duration-300"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg><span class="text-slate-500 text-sm">10,000+ Happy Clients</span></div>
                <div class="flex items-center gap-3 hover:scale-105 transition-transform duration-300"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span class="text-slate-500 text-sm">24/7 Customer Support</span></div>
                <div class="flex items-center gap-3 hover:scale-105 transition-transform duration-300"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><span class="text-slate-500 text-sm">4.92 Trust Score</span></div>
            </div>
        </div>
    </div>

    <!-- FAQs Section -->
    <div class="w-full py-20 bg-slate-100">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="grid md:grid-cols-2 gap-16">
                <div class="valorant-border rounded-3xl p-8 transition-all duration-300 hover:shadow-xl opacity-0 animate-fade-up">
                    <h2 class="font-grotesk text-[48px] font-bold mb-5 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">What customers ask about</h2>
                    <p class="text-slate-500 mb-8">Everything about BizCashAndCapital and how we help your business thrive.</p>
                    <a href="tel:+12166470007" class="border border-slate-300 hover:border-green-500 hover:bg-green-50 transition-all duration-300 px-8 py-3 rounded-full text-sm font-medium inline-block text-slate-800 hover:text-green-600 hover:scale-105">+1 (216) 647-0007 →</a>
                </div>
                <div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer transition-all duration-300 hover:pl-4" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>What is BizCashAndCapital?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">We're a leading provider of business loans, specializing in low-credit solutions and fast funding.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer transition-all duration-300 hover:pl-4" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>How does BizCashAndCapital work?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Streamlined online application, holistic review, and funding within days.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-slate-200 py-6 cursor-pointer transition-all duration-300 hover:pl-4" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>No worries about a bad credit score?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Correct. We specialize in loans for businesses with low credit scores.</div>
                    </div>
                    <div class="faq-item valorant-border border-t border-b border-slate-200 py-6 cursor-pointer transition-all duration-300 hover:pl-4" onclick="toggleFaq(this)">
                        <div class="flex justify-between items-center text-lg font-semibold font-grotesk"><span>What are the criteria for loan application?</span><div class="w-7 h-7 border border-slate-200 rounded-full flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500">+</div></div>
                        <div class="faq-answer text-sm text-slate-500 mt-4 leading-relaxed hidden">Minimum 6 months in business. Simple documentation required.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section - Green Theme -->
    <div class="w-full py-20 bg-slate-900 relative overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/start-your-application.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/85 to-slate-800/90 z-10"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border text-center rounded-3xl p-16 bg-slate-800/40 backdrop-blur-sm transition-all duration-500 hover:bg-slate-800/60 opacity-0 animate-fade-up">
                <h2 class="font-grotesk text-[clamp(42px,6vw,72px)] font-bold text-white mb-6">Start your application</h2>
                <div class="font-grotesk text-sm text-slate-300 mb-10">( No fee to apply. Ready? )</div>
                <div class="flex gap-5 justify-center flex-wrap">
                    <a href="mailto:info@bizcashandcapital.com" class="bg-white text-slate-800 px-10 py-4 rounded-full text-sm font-bold transition-all duration-300 hover:bg-green-500 hover:text-white hover:scale-105 hover:shadow-lg">info@bizcashandcapital.com</a>
                    <a href="tel:+12166470007" class="border border-white text-white px-10 py-4 rounded-full text-sm font-bold transition-all duration-300 hover:bg-white hover:text-slate-800 hover:scale-105">+1 (216) 647-0007</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="w-full border-t border-slate-200 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <footer class="py-12 text-center text-slate-500 text-[13px]">
                <div class="font-grotesk text-xl font-semibold mb-6 bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">BizCash&Capital</div>
                <div class="flex justify-center gap-8 flex-wrap mb-8">
                    <a href="#" class="text-slate-500 hover:text-green-600 transition-all duration-300 no-underline text-sm hover:scale-105 inline-block">About</a>
                    <a href="#" class="text-slate-500 hover:text-green-600 transition-all duration-300 no-underline text-sm hover:scale-105 inline-block">Services</a>
                    <a href="#" class="text-slate-500 hover:text-green-600 transition-all duration-300 no-underline text-sm hover:scale-105 inline-block">Contact</a>
                    <a href="#" class="text-slate-500 hover:text-green-600 transition-all duration-300 no-underline text-sm hover:scale-105 inline-block">Privacy</a>
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

        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100');
                    entry.target.classList.remove('opacity-0');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        document.querySelectorAll('.animate-fade-up, .animate-fade-in, .animate-slide-in-left, .animate-slide-in-right').forEach(el => observer.observe(el));
    </script>
</body>
</html>