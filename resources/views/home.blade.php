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
                            '0%': {
                                opacity: '1',
                                transform: 'translateX(-50%) translateY(0)'
                            },
                            '100%': {
                                opacity: '0',
                                transform: 'translateX(-50%) translateY(15px)'
                            },
                        },
                        marquee: {
                            'from': {
                                transform: 'translateX(0)'
                            },
                            'to': {
                                transform: 'translateX(-50%)'
                            },
                        },
                        fadeUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(30px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        slideInLeft: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateX(-50px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateX(0)'
                            },
                        },
                        slideInRight: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateX(50px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateX(0)'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-15px)'
                            },
                        },
                        glowPulse: {
                            '0%, 100%': {
                                boxShadow: '0 0 5px rgba(16,185,129,0.3)'
                            },
                            '50%': {
                                boxShadow: '0 0 20px rgba(16,185,129,0.6)'
                            },
                        },
                    }
                }
            }
        }
    </script>

    <style>
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.4;
            }
        }

        @keyframes scrollAnim {
            0% {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateX(-50%) translateY(15px);
            }
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
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

        /* EDGY BORDER STYLES - No rounded corners */
        .edgy-border {
            border-radius: 0 !important;
        }

        .valorant-border {
            position: relative;
            border: none !important;
            border-radius: 0 !important;
        }

        .valorant-border::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #10b981 0%, #059669 25%, transparent 50%, #10b981 75%, #059669 100%);
            border-radius: 0 !important;
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
            border-radius: 0 !important;
            z-index: -1;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #059669;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.15);
        }

        .card-img-zoom {
            transition: transform 0.5s ease;
        }

        .card-img-zoom:hover {
            transform: scale(1.05);
        }

        /* Scroll Animation Classes */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .scroll-reveal-left.revealed {
            opacity: 1;
            transform: translateX(0);
        }

        .scroll-reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .scroll-reveal-right.revealed {
            opacity: 1;
            transform: translateX(0);
        }

        .scroll-reveal-scale {
            opacity: 0;
            transform: scale(0.95);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .scroll-reveal-scale.revealed {
            opacity: 1;
            transform: scale(1);
        }

        /* Force all elements to have sharp edges */
        .rounded-2xl,
        .rounded-3xl,
        .rounded-xl,
        .rounded-full,
        .rounded-2xl,
        .rounded-3xl,
        .rounded-2xl,
        [class*="rounded-"] {
            border-radius: 0 !important;
        }

        button,
        a,
        div,
        section,
        .card,
        .dashboard-card,
        .valorant-border,
        .bg-white,
        .bg-gray-900,
        .bg-slate-100,
        .bg-slate-50,
        .bg-green-500,
        .bg-green-600 {
            border-radius: 0 !important;
        }

        .faq-toggle,
        .w-7.h-7 {
            border-radius: 0 !important;
        }

        .animate-marquee,
        .marquee-track {
            border-radius: 0 !important;
        }

        video,
        img {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="font-inter bg-slate-50 text-slate-900 overflow-x-hidden">

    @include('header');

    <!-- HERO Section - EDGY DESIGN -->
    <div class="relative overflow-hidden min-h-screen pt-16">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/check.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-black/50 to-black/30 z-10"></div>

        <div class="relative z-20 h-screen flex items-center max-w-7xl mx-auto px-12 lg:px-16">
            <div class="w-full max-w-3xl scroll-reveal-left">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 mb-6 border border-white/20" style="border-radius: 0;">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse-custom"></span>
                    <span class="text-[11px] font-medium text-white/90 tracking-wider">01 · MANIFESTO</span>
                </div>
                <h1 class="font-grotesk text-[clamp(48px,7vw,88px)] font-normal leading-[1.1] tracking-tight text-white mb-8">
                    best business<br>
                    <span class="text-green-400">loan</span>
                    low credit score
                </h1>
                <p class="text-base font-normal text-white/70 max-w-xl mb-10 leading-relaxed">
                    Fast, flexible loans for entrepreneurs with low credit scores. No hidden fees, no endless paperwork.
                </p>
                <div class="flex gap-4 items-center flex-wrap">
                    <a href="#apply" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 font-medium text-sm transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-green-500/30" style="border-radius: 0;">Get funding →</a>
                    <a href="tel:+12166470007" class="bg-transparent text-white px-7 py-3 font-normal text-sm border border-white/30 hover:border-white/50 hover:bg-white/10 transition-all duration-300" style="border-radius: 0;">+1 (216) 647-0007</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Marquee -->
    <div class="bg-slate-800 py-5 overflow-hidden whitespace-nowrap w-full scroll-reveal" style="border-radius: 0;">
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

    <!-- Get Started Section - EDGY DESIGN -->
    <div id="apply" class="w-full py-24 bg-gradient-to-br from-slate-50 to-slate-100 relative overflow-hidden" style="border-radius: 0;">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-green-500/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm px-4 py-1.5 text-xs font-medium text-green-600 mb-5 border border-green-200/50 shadow-sm" style="border-radius: 0;">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Simple & Transparent
                </div>
                <h2 class="font-grotesk text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-4 text-slate-800">
                    Start your journey <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-500 bg-clip-text text-transparent">in minutes</span>
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-base leading-relaxed">With our personalized small business loans, achieve financial freedom while fueling your business growth. No hidden fees, no surprises.</p>
            </div>

            <!-- Feature Cards -->
            <div class="grid md:grid-cols-3 gap-6 mb-20">
                <div class="group bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.1s">
                    <div class="w-16 h-16 bg-green-50 flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110" style="border-radius: 0;">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">No Application Fee</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Zero hidden fees. Transparent process from start to finish.</p>
                </div>
                <div class="group bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.2s">
                    <div class="w-16 h-16 bg-green-50 flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110" style="border-radius: 0;">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Quick Funding</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Approved in days, funded within a week. Streamlined evaluation.</p>
                </div>
                <div class="group bg-white p-8 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.3s">
                    <div class="w-16 h-16 bg-green-50 flex items-center justify-center mx-auto mb-5 transition-all duration-300 group-hover:bg-green-100 group-hover:scale-110" style="border-radius: 0;">
                        <svg class="w-8 h-8 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            <path d="M12 8v8" />
                            <path d="M8 12h8" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-2">Low Interest Rates</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Flexible terms tailored to your cash flow.</p>
                </div>
            </div>

            <!-- Loan Calculator -->
            <div class="relative mb-20 scroll-reveal">
                <div class="absolute inset-0 bg-gradient-to-r from-green-500/10 to-emerald-500/10 blur-2xl"></div>
                <div class="relative bg-white shadow-xl overflow-hidden border border-slate-100" style="border-radius: 0;">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="p-8 md:p-10 bg-gradient-to-br from-slate-50 to-white">
                            <div class="inline-flex items-center gap-2 bg-green-50 px-3 py-1 text-xs font-medium text-green-600 mb-4" style="border-radius: 0;">
                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                Instant Calculator
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800 mb-2">How much do you need?</h3>
                            <p class="text-slate-500 text-sm mb-6">Use the sliders to estimate your monthly payments</p>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Loan Amount</span><span class="text-green-600 font-semibold" id="amountVal">$25,000</span></div>
                                    <input type="range" id="loanAmountSlider" min="1000" max="100000" step="1000" value="25000" class="w-full h-2 bg-slate-200 appearance-none cursor-pointer accent-green-500">
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Duration (months)</span><span class="text-green-600 font-semibold" id="durationVal">24 months</span></div>
                                    <input type="range" id="durationSlider" min="6" max="60" step="1" value="24" class="w-full h-2 bg-slate-200 appearance-none cursor-pointer accent-green-500">
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-2"><span class="text-slate-600">Interest Rate</span><span class="text-green-600 font-semibold" id="rateVal">6.9%</span></div>
                                    <input type="range" id="rateSlider" min="4.9" max="24.9" step="0.1" value="6.9" class="w-full h-2 bg-slate-200 appearance-none cursor-pointer accent-green-500">
                                </div>
                            </div>
                        </div>
                        <div class="p-8 md:p-10 bg-gradient-to-br from-green-600 to-green-700 text-white">
                            <div class="text-center mb-6">
                                <p class="text-green-100 text-sm mb-2">Your estimated monthly payment</p>
                                <p class="text-5xl md:text-6xl font-bold" id="monthlyResult">$1,134</p>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-center mb-6">
                                <div class="bg-white/10 p-3">
                                    <p class="text-green-100 text-xs">Total Interest</p>
                                    <p class="text-lg font-semibold" id="totalInterest">$2,216</p>
                                </div>
                                <div class="bg-white/10 p-3">
                                    <p class="text-green-100 text-xs">Total Payment</p>
                                    <p class="text-lg font-semibold" id="totalPayment">$27,216</p>
                                </div>
                            </div>
                            <a href="#" class="block w-full text-center bg-white text-green-600 py-3 font-semibold hover:bg-green-50 transition-all duration-300 hover:scale-[1.02]" style="border-radius: 0;">Apply Now →</a>
                            <p class="text-center text-green-200 text-xs mt-3">No credit check for pre-qualification</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats row -->
            <div class="grid md:grid-cols-3 gap-5">
                <div class="bg-white p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.1s">
                    <div class="text-4xl font-bold font-grotesk text-green-600 mb-2">3,000+</div>
                    <div class="text-slate-500 text-sm">applications processed</div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-transparent mx-auto mt-4"></div>
                </div>
                <div class="bg-white p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.2s">
                    <div class="text-4xl font-bold font-grotesk text-green-600 mb-2">6+</div>
                    <div class="text-slate-500 text-sm">years of expertise</div>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-transparent mx-auto mt-4"></div>
                </div>
                <div class="bg-white p-8 text-center transition-all duration-300 hover:-translate-y-1 hover:shadow-lg border border-slate-100 scroll-reveal" style="border-radius: 0; transition-delay: 0.3s">
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
            if (monthlyRate === 0) {
                monthly = principal / months;
            } else {
                monthly = principal * monthlyRate * Math.pow(1 + monthlyRate, months) / (Math.pow(1 + monthlyRate, months) - 1);
            }
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

    <!-- About Us Section -->
    <div class="w-full py-20 bg-slate-100 relative overflow-hidden" style="border-radius: 0;">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/hero-section.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/90 to-slate-800/95 z-10"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border p-12 bg-white/5 backdrop-blur-sm transition-all duration-500 hover:bg-white/10 scroll-reveal" style="border-radius: 0;">
                <div class="mb-6">
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 text-xs font-semibold inline-block mr-2 hover:bg-white/25 transition-all duration-300" style="border-radius: 0;">03: About Us</span>
                    <span class="bg-white/15 text-white border border-white/20 px-4 py-1.5 text-xs font-semibold inline-block hover:bg-white/25 transition-all duration-300" style="border-radius: 0;">Our Mission</span>
                </div>
                <div class="font-grotesk text-[clamp(42px,8vw,90px)] leading-[1] tracking-tighter mb-8 text-white">digital driving force<br>for your business</div>
                <div class="font-grotesk text-sm text-white/70 mb-12">( full cycle financial partner )</div>
                <div class="grid md:grid-cols-2 gap-12">
                    <p class="text-[15px] leading-relaxed text-white/85 hover:text-white transition-colors duration-300">We empower businesses and ensure financial prosperity through tailored commercial loan services. Every brand gets a bespoke approach.</p>
                    <p class="text-[15px] leading-relaxed text-white/85 hover:text-white transition-colors duration-300">To build an effective strategy, we study your business, your market, and your goals in depth — then deliver the right capital solution.</p>
                </div>
            </div>
        </div>
    </div>

<!-- Why Choose Us - 4 Cards with Full Background Images -->
<section style="padding: 6rem 0; background: linear-gradient(135deg, #f8faf8 0%, #f0f5f0 100%); position: relative; overflow: hidden;">
    <!-- Decorative Background Elements -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 40%, #1a7a4a 2px, transparent 2px); background-size: 50px 50px;"></div>
    <div style="position: absolute; top: -150px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(200,232,106,0.08) 0%, transparent 70%); border-radius: 50% !important;"></div>
    <div style="position: absolute; bottom: -150px; left: -100px; width: 280px; height: 280px; background: radial-gradient(circle, rgba(26,122,74,0.06) 0%, transparent 70%); border-radius: 50% !important;"></div>
    
    <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem; position: relative; z-index: 2;">
        
        <!-- Section Header -->
        <div style="text-align: center; max-width: 750px; margin: 0 auto 3.5rem auto;">
            <div style="display: inline-flex; align-items: center; gap: 0.75rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); backdrop-filter: blur(4px); padding: 0.5rem 1.5rem; margin-bottom: 1.5rem; border: 1px solid #1a7a4a20;">
                <span style="width: 8px; height: 8px; background: #1a7a4a; display: inline-block;"></span>
                <span style="font-size: 0.7rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.1em;">WHY TRUST US</span>
            </div>
            <h2 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38); -webkit-background-clip: text; background-clip: text; color: transparent; letter-spacing: -0.02em;">Your Reliable Partners<br>for Working Capital</h2>
            <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1.5rem auto;"></div>
            <p style="color: #5a6b5a; font-size: 1rem; line-height: 1.7; max-width: 600px; margin: 0 auto;">We understand the significance of having a steady and reliable source of working capital for your business.</p>
        </div>
        
        <!-- 4 Cards in One Line - Full Background Images -->
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
            
            <!-- Card 1 - Quick Funding (Full Background Image) -->
            <div class="why-card" style="position: relative; min-height: 380px; overflow: hidden; transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 40px -15px rgba(26,122,74,0.3)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                
                <!-- Full Background Image -->
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=500&h=600&fit=crop" 
                         alt="Quick funding" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <!-- Dark Gradient Overlay -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.6), rgba(0,0,0,0.4));"></div>
                </div>
                
                <!-- Content -->
                <div style="position: relative; z-index: 2; padding: 1.75rem; height: 100%; min-height: 380px; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                                    <div style="text-align: center;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 0.75rem;">Quick Funding</h3>
                        <div style="width: 40px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem auto;"></div>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.85rem; line-height: 1.6;">We guarantee fast funding thanks to our shortened approach. Get approved in days, not weeks.</p>
                        <div style="margin-top: 1.25rem;">
                            <span style="color: #c8e86a; font-size: 0.75rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.25rem;">
                                Learn More
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 - No Application Fee (Full Background Image) -->
            <div class="why-card" style="position: relative; min-height: 380px; overflow: hidden; transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 40px -15px rgba(26,122,74,0.3)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=500&h=600&fit=crop" 
                         alt="No application fee" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.6), rgba(0,0,0,0.4));"></div>
                </div>
                
                <div style="position: relative; z-index: 2; padding: 1.75rem; height: 100%; min-height: 380px; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                    <div style="text-align: center;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 0.75rem;">No Application Fee</h3>
                        <div style="width: 40px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem auto;"></div>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.85rem; line-height: 1.6;">Total transparency with zero unnecessary costs. Your money works for you from day one.</p>
                        <div style="margin-top: 1.25rem;">
                            <span style="color: #c8e86a; font-size: 0.75rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.25rem;">
                                Learn More
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 - Low-Interest Loans (Full Background Image) -->
            <div class="why-card" style="position: relative; min-height: 380px; overflow: hidden; transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 40px -15px rgba(26,122,74,0.3)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=500&h=600&fit=crop" 
                         alt="Low interest rates" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.6), rgba(0,0,0,0.4));"></div>
                </div>
                
                <div style="position: relative; z-index: 2; padding: 1.75rem; height: 100%; min-height: 380px; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                    <div style="text-align: center;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83"/>
                                <path d="M12 8v8M8 12h8"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 0.75rem;">Low-Interest Loans</h3>
                        <div style="width: 40px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem auto;"></div>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.85rem; line-height: 1.6;">Flexible repayment terms designed for lasting financial freedom. Competitive rates for your success.</p>
                        <div style="margin-top: 1.25rem;">
                            <span style="color: #c8e86a; font-size: 0.75rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.25rem;">
                                Learn More
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 - Flexible Terms (Full Background Image) -->
            <div class="why-card" style="position: relative; min-height: 380px; overflow: hidden; transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                 onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 25px 40px -15px rgba(26,122,74,0.3)';"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0;">
                    <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=500&h=600&fit=crop" 
                         alt="Flexible terms" 
                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                         onmouseover="this.style.transform='scale(1.05)'"
                         onmouseout="this.style.transform='scale(1)'">
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.6), rgba(0,0,0,0.4));"></div>
                </div>
                
                <div style="position: relative; z-index: 2; padding: 1.75rem; height: 100%; min-height: 380px; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                    <div style="text-align: center;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 8v4l3 3M12 2a10 10 0 1010 10"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 0.75rem;">Flexible Terms</h3>
                        <div style="width: 40px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem auto;"></div>
                        <p style="color: rgba(255,255,255,0.85); font-size: 0.85rem; line-height: 1.6;">Customizable repayment plans that work with your cash flow. We create the perfect loan structure.</p>
                        <div style="margin-top: 1.25rem;">
                            <span style="color: #c8e86a; font-size: 0.75rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.25rem;">
                                Learn More
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Trust Indicators / Extra Badges -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2.5rem; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid #e2ece2;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                <span style="color: #4a5a4a; font-size: 0.875rem; font-weight: 500;">10,000+ Businesses Funded</span>
            </div>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 6v6l4 2"/>
                </svg>
                <span style="color: #4a5a4a; font-size: 0.875rem; font-weight: 500;">Fast Approval 24-72 hrs</span>
            </div>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
                <span style="color: #4a5a4a; font-size: 0.875rem; font-weight: 500;">No Hidden Fees</span>
            </div>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                    <path d="M12 2a10 10 0 1010 10"/>
                    <path d="M12 6v6l4 2"/>
                </svg>
                <span style="color: #4a5a4a; font-size: 0.875rem; font-weight: 500;">Flexible Repayment</span>
            </div>
        </div>
    </div>
</div>

<style>
    @media (max-width: 1024px) {
        .why-card {
            min-height: 350px !important;
        }
        .why-card h3 {
            font-size: 1.2rem !important;
        }
        .why-card p {
            font-size: 0.8rem !important;
        }
        .why-card svg {
            width: 28px !important;
            height: 28px !important;
        }
        .why-card > div > div:first-child {
            width: 60px !important;
            height: 60px !important;
        }
    }
    
    @media (max-width: 900px) {
        div[style*="grid-template-columns: repeat(4, 1fr)"] {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }
    
    @media (max-width: 500px) {
        div[style*="grid-template-columns: repeat(4, 1fr)"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>

    <!-- Why Us Section - Redesigned Premium Layout -->
    <div class="w-full py-24 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden" style="border-radius: 0;">
        <!-- Background decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-green-500/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-emerald-500/5 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-reveal">
                <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-2 text-xs font-bold text-green-700 mb-5 shadow-sm uppercase tracking-wider" style="border-radius: 0;">
                    <span class="inline-block w-2 h-2 bg-green-500 animate-pulse"></span>
                    Why Choose Us
                </div>
                <h2 class="font-grotesk text-4xl md:text-5xl font-bold tracking-tight text-slate-800 mb-4">
                    Your reliable <span class="text-green-600">partners</span>
                </h2>
                <div class="w-20 h-0.5 bg-green-500 mx-auto mb-5"></div>
                <p class="text-slate-500 max-w-2xl mx-auto text-base leading-relaxed">We're committed to your success with transparent, fast, and flexible loan solutions designed for your unique business needs.</p>
            </div>

            <!-- 3 Column Feature Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Card 1 - Quick Funding -->
                <div class="group bg-white border border-slate-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl scroll-reveal overflow-hidden" style="border-radius: 0; transition-delay: 0.1s">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=300&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold text-5xl opacity-20">01</div>
                    </div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-500 flex items-center justify-center mb-5 shadow-lg" style="border-radius: 0;">
                            <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">Quick Funding</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">Shortened approval with practical evaluation ensures fast capital when needed. Get funded in days, not weeks.</p>
                        <div class="flex items-center gap-2 text-green-600 text-sm font-medium group-hover:gap-3 transition-all duration-300 cursor-pointer">
                            <span>Learn more</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - No Application Fee -->
                <div class="group bg-white border border-slate-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl scroll-reveal overflow-hidden" style="border-radius: 0; transition-delay: 0.2s">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=300&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold text-5xl opacity-20">02</div>
                    </div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-500 flex items-center justify-center mb-5 shadow-lg" style="border-radius: 0;">
                            <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">No Application Fee</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">Transparency with zero unnecessary costs. Your money works for you from day one with no hidden charges.</p>
                        <div class="flex items-center gap-2 text-green-600 text-sm font-medium group-hover:gap-3 transition-all duration-300 cursor-pointer">
                            <span>Learn more</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Low-Interest Loans -->
                <div class="group bg-white border border-slate-200 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl scroll-reveal overflow-hidden" style="border-radius: 0; transition-delay: 0.3s">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=300&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white font-bold text-5xl opacity-20">03</div>
                    </div>
                    <div class="p-8">
                        <div class="w-14 h-14 bg-green-500 flex items-center justify-center mb-5 shadow-lg" style="border-radius: 0;">
                            <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                                <path d="M12 8v8" />
                                <path d="M8 12h8" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">Low-Interest Loans</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-4">Flexible repayment terms for lasting financial freedom and growth. Competitive rates designed for your success.</p>
                        <div class="flex items-center gap-2 text-green-600 text-sm font-medium group-hover:gap-3 transition-all duration-300 cursor-pointer">
                            <span>Learn more</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="group-hover:translate-x-1 transition-transform">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Stats / Trust Indicators -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-slate-200 scroll-reveal" style="transition-delay: 0.4s">
                <div class="text-center group">
                    <div class="text-3xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform">10,000+</div>
                    <div class="text-slate-500 text-sm uppercase tracking-wide">Happy Clients</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform">24/7</div>
                    <div class="text-slate-500 text-sm uppercase tracking-wide">Customer Support</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform">4.92</div>
                    <div class="text-slate-500 text-sm uppercase tracking-wide">Trust Score</div>
                </div>
                <div class="text-center group">
                    <div class="text-3xl font-bold text-green-600 mb-2 group-hover:scale-110 transition-transform">100%</div>
                    <div class="text-slate-500 text-sm uppercase tracking-wide">Secure & Safe</div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQs Section -->
    <div class="w-full py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden" style="border-radius: 0;">
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.04] pointer-events-none bg-[radial-gradient(circle_at_25%_40%,#10b981_1px,transparent_1px)] bg-[length:40px_40px]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-green-500/5 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="text-center mb-14 scroll-reveal">
                <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-2 text-xs font-semibold text-green-700 mb-5 shadow-sm" style="border-radius: 0;">
                    <span class="inline-block w-1.5 h-1.5 bg-green-500 rounded-full animate-pulse"></span>
                    Frequently Asked Questions
                </div>
                <h2 class="font-grotesk text-4xl md:text-5xl font-bold tracking-tight text-slate-800 mb-4">
                    Got questions? <span class="text-green-600">We've got answers</span>
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-base leading-relaxed">Everything you need to know about BizCashAndCapital and how we help your business thrive.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div class="scroll-reveal-left">
                    <div class="bg-gradient-to-br from-green-600 to-emerald-700 p-8 text-white shadow-xl" style="border-radius: 0;">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 -mr-16 -mt-16"></div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-white/20 flex items-center justify-center mb-6 backdrop-blur-sm" style="border-radius: 0;">
                                <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-3">Still have questions?</h3>
                            <p class="text-green-100 text-sm mb-6 leading-relaxed">Can't find the answer you're looking for? Please chat to our friendly team.</p>
                            <div class="space-y-4">
                                <a href="tel:+12166470007" class="flex items-center gap-3 text-white hover:bg-white/10 p-3 transition-all duration-300 group" style="border-radius: 0;">
                                    <div class="w-10 h-10 bg-white/20 flex items-center justify-center group-hover:bg-white/30 transition" style="border-radius: 0;"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                        </svg></div>
                                    <div>
                                        <p class="text-xs text-green-200">Call us</p>
                                        <p class="font-medium">+1 (216) 647-0007</p>
                                    </div>
                                </a>
                                <a href="mailto:info@bizcashandcapital.com" class="flex items-center gap-3 text-white hover:bg-white/10 p-3 transition-all duration-300 group" style="border-radius: 0;">
                                    <div class="w-10 h-10 bg-white/20 flex items-center justify-center group-hover:bg-white/30 transition" style="border-radius: 0;"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                            <polyline points="22,6 12,13 2,6" />
                                        </svg></div>
                                    <div>
                                        <p class="text-xs text-green-200">Email us</p>
                                        <p class="font-medium">info@bizcashandcapital.com</p>
                                    </div>
                                </a>
                                <div class="flex items-center gap-3 text-white hover:bg-white/10 p-3 transition-all duration-300 group" style="border-radius: 0;">
                                    <div class="w-10 h-10 bg-white/20 flex items-center justify-center group-hover:bg-white/30 transition" style="border-radius: 0;"><svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M12 6v6l4 2" />
                                        </svg></div>
                                    <div>
                                        <p class="text-xs text-green-200">Business hours</p>
                                        <p class="font-medium">Mon-Sat, 8am - 6pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal-right">
                    <div class="space-y-3">
                        <div class="faq-item bg-white border border-slate-100 overflow-hidden transition-all duration-300 cursor-pointer shadow-sm hover:shadow-md" style="border-radius: 0;" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-green-100 flex items-center justify-center text-green-600 font-bold" style="border-radius: 0;">Q</div>
                                    <span class="text-lg font-semibold text-slate-800">What is BizCashAndCapital?</span>
                                </div>
                                <div class="w-7 h-7 border border-slate-200 flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500 faq-toggle" style="border-radius: 0;">+</div>
                            </div>
                            <div class="faq-answer px-6 pb-6 pt-0 text-slate-500 text-sm leading-relaxed hidden">
                                <div class="border-t border-slate-100 pt-4">
                                    <div class="flex gap-3">
                                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full mt-1.5"></div>
                                        <p>We're a leading provider of business loans, specializing in low-credit solutions and fast funding.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item bg-white border border-slate-100 overflow-hidden transition-all duration-300 cursor-pointer shadow-sm hover:shadow-md" style="border-radius: 0;" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-green-100 flex items-center justify-center text-green-600 font-bold" style="border-radius: 0;">Q</div>
                                    <span class="text-lg font-semibold text-slate-800">How does BizCashAndCapital work?</span>
                                </div>
                                <div class="w-7 h-7 border border-slate-200 flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500 faq-toggle" style="border-radius: 0;">+</div>
                            </div>
                            <div class="faq-answer px-6 pb-6 pt-0 text-slate-500 text-sm leading-relaxed hidden">
                                <div class="border-t border-slate-100 pt-4">
                                    <div class="flex gap-3">
                                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full mt-1.5"></div>
                                        <p>Streamlined online application, holistic review, and funding within days.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item bg-white border border-slate-100 overflow-hidden transition-all duration-300 cursor-pointer shadow-sm hover:shadow-md" style="border-radius: 0;" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-green-100 flex items-center justify-center text-green-600 font-bold" style="border-radius: 0;">Q</div>
                                    <span class="text-lg font-semibold text-slate-800">No worries about a bad credit score?</span>
                                </div>
                                <div class="w-7 h-7 border border-slate-200 flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500 faq-toggle" style="border-radius: 0;">+</div>
                            </div>
                            <div class="faq-answer px-6 pb-6 pt-0 text-slate-500 text-sm leading-relaxed hidden">
                                <div class="border-t border-slate-100 pt-4">
                                    <div class="flex gap-3">
                                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full mt-1.5"></div>
                                        <p>Correct! We specialize in loans for businesses with low credit scores.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-item bg-white border border-slate-100 overflow-hidden transition-all duration-300 cursor-pointer shadow-sm hover:shadow-md" style="border-radius: 0;" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-8 h-8 bg-green-100 flex items-center justify-center text-green-600 font-bold" style="border-radius: 0;">Q</div>
                                    <span class="text-lg font-semibold text-slate-800">What are the criteria for loan application?</span>
                                </div>
                                <div class="w-7 h-7 border border-slate-200 flex items-center justify-center text-lg font-semibold transition-all duration-300 hover:bg-green-500 hover:text-white hover:border-green-500 faq-toggle" style="border-radius: 0;">+</div>
                            </div>
                            <div class="faq-answer px-6 pb-6 pt-0 text-slate-500 text-sm leading-relaxed hidden">
                                <div class="border-t border-slate-100 pt-4">
                                    <div class="flex gap-3">
                                        <div class="w-1.5 h-1.5 bg-green-500 rounded-full mt-1.5"></div>
                                        <p>Minimum 6 months in business. Simple documentation required.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12 scroll-reveal">
                <p class="text-slate-500 text-sm">Still have questions? <a href="#" class="text-green-600 font-medium hover:underline">Contact our support team</a> for personalized assistance.</p>
            </div>
        </div>
    </div>

    <style>
        .faq-item.open .faq-toggle {
            background: #10b981;
            border-color: #10b981;
            color: white;
            transform: rotate(180deg);
        }
    </style>

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

    <!-- CTA Section -->
    <div class="w-full py-20 bg-slate-900 relative overflow-hidden" style="border-radius: 0;">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/start-your-application.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-slate-900/85 to-slate-800/90 z-10"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-20">
            <div class="valorant-border text-center p-16 bg-slate-800/40 backdrop-blur-sm transition-all duration-500 hover:bg-slate-800/60 scroll-reveal-scale" style="border-radius: 0;">
                <h2 class="font-grotesk text-[clamp(42px,6vw,72px)] font-bold text-white mb-6">Start your application</h2>
                <div class="font-grotesk text-sm text-slate-300 mb-10">( No fee to apply. Ready? )</div>
                <div class="flex gap-5 justify-center flex-wrap">
                    <a href="mailto:info@bizcashandcapital.com" class="bg-white text-slate-800 px-10 py-4 text-sm font-bold transition-all duration-300 hover:bg-green-500 hover:text-white hover:scale-105 hover:shadow-lg" style="border-radius: 0;">info@bizcashandcapital.com</a>
                    <a href="tel:+12166470007" class="border border-white text-white px-10 py-4 text-sm font-bold transition-all duration-300 hover:bg-white hover:text-slate-800 hover:scale-105" style="border-radius: 0;">+1 (216) 647-0007</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="w-full border-t border-slate-200 bg-white" style="border-radius: 0;">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <footer class="py-12 text-center text-slate-500 text-[13px] scroll-reveal">
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

        const scrollElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    scrollObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        scrollElements.forEach(el => scrollObserver.observe(el));
    </script>
</body>

</html>